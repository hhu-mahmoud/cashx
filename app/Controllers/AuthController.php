<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Services;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper(['cookie']);

        // Check if "Remember Me" cookie exists
        $rememberMe = get_cookie('remember_me');
        if ($rememberMe && !session()->get('isLoggedIn')) {
            $encrypter = service('encrypter');
            $ciphertext = $encrypter->decrypt($rememberMe);
            $data = json_decode($ciphertext, true);
            if ($data) {
                session()->set([
                    'user_id'    => $data['user_id'],
                    'username'   => $data['username'],
                    'lang'=> $data['lang'],
                    'isLoggedIn' => true
                ]);
                service('request')->setLocale($data['lang']);
                // Regenerate session ID after automatic login
                session()->regenerate();
            }
        }
    }

    public function resetPassword()
    {
        helper('form'); // Load the form helper

        $token = $this->request->getVar('token');
        $model = new UserModel();

        // Validate token and expiration
        $user = $model->where('password_reset_token', $token)->where('password_reset_expires >=', date('Y-m-d H:i:s'))->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Invalid or expired token.');
        }

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'password'         => 'required|min_length[6]',
                'confirm_password' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/reset_password', [
                    'validation' => $this->validator,
                    'token'      => $token
                ]);
            }

            // Update the user's password
            $passwordHash = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            $model->update($user['id'], [
                'password_hash'          => $passwordHash,
                'password_reset_token'   => null,
                // Clear the token after use
                'password_reset_expires' => null
                // Clear expiration
            ]);

            return redirect()->to('/login')->with('success', 'Your password has been reset.');
        }

        return view('auth/reset_password', ['token' => $token]);
    }

    protected function sendPasswordResetEmail($email, $token)
    {
        $emailService = Services::email();

        // Create a URL with the token
        $resetLink = site_url("auth/reset-password?token=$token");

        $emailService->setFrom('noreply@heyit.org', 'CashX Set your password here');
        $emailService->setTo($email);
        $emailService->setSubject('Password Reset Request');
        $emailService->setMessage("Please click the link below to set your password:\n\n<a href=\"$resetLink\">Set the password</a>");

        if (!$emailService->send()) {
            log_message('error', 'Email not sent: ' . $emailService->printDebugger());
        }
    }

    public function register()
    {
        helper([
            'form',
            'url'
        ]);

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'firstname' => 'required|min_length[2]|max_length[50]',
                'lastname'  => 'required|min_length[2]|max_length[50]',
                'username'  => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
                'email'     => 'required|valid_email|is_unique[users.email]',
            ];

            if (!$this->validate($rules)) {
                return view('auth/register', [
                    'validation' => $this->validator
                ]);
            }

            $model = new UserModel();
            $token = bin2hex(random_bytes(32));  // Generate token
            $expireTime = date('Y-m-d H:i:s', strtotime('+1 hour'));  // Token expiration time (1 hour)

            // Save user without password and send email with reset link
            $model->save([
                'firstname'              => $this->request->getVar('firstname'),
                'lastname'               => $this->request->getVar('lastname'),
                'username'               => $this->request->getVar('username'),
                'email'                  => $this->request->getVar('email'),
                'password_reset_token'   => $token,
                'password_reset_expires' => $expireTime
            ]);

            // Send the email with password reset link
            $this->sendPasswordResetEmail($this->request->getVar('email'), $token);

            return redirect()->to('/login')->with('success', 'Registration successful! Please check your email to set your password.');
        }

        return view('auth/register');
    }

    public function login()
    {
        helper([
            'form',
            'cookie'
        ]); // Load cookie helper

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/login', ['validation' => $this->validator]);
            }

            $model = new UserModel();
            $user = $model->where('email', $this->request->getVar('email'))->first();

            if ($user) {

                if (password_verify($this->request->getVar('password'), $user['password_hash'])) {
                    session()->set([
                        'user_id'    => $user['id'],
                        'username'   => $user['username'],
                        'firstname'   => $user['firstname'],
                        'lastname'   => $user['lastname'],
                        'isLoggedIn' => true
                    ]);

                    // Regenerate session ID for security
                    session()->regenerate();

                    // Handle "Remember Me" checkbox
                    if ($this->request->getVar('remember')) {
                        $cookieValue = json_encode([
                            'user_id'  => $user['id'],
                            'username' => $user['username'],
                            'firstname'   => $user['firstname'],
                            'lastname'   => $user['lastname'],
                            'lang' => session()->get('lang') ?? config('App')->defaultLocale,
                        ]);
                        $encrypter = service('encrypter');
                        $ciphertext = $encrypter->encrypt($cookieValue);
                        set_cookie('remember_me', $ciphertext, 30 * 24 * 60 * 60, '', '', true, true);
                    } else {
                        delete_cookie('remember_me');
                    }

                    return redirect()->to('/home');
                }
            }

            return view('auth/login', ['error' => 'Invalid login credentials.']);
        }

        return view('auth/login');
    }

    public function logout()
    {
        helper('cookie');
        session()->destroy();
        delete_cookie('remember_me');
        return redirect()->to('/');
    }
}