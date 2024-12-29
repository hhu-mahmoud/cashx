<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{

    /**
     * Update user profile.
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function updateProfile(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        $session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        $userId = $session->get('user_id'); // Retrieve the user ID from the session

        if (!$userId) {
            return redirect()->to('/')->with('error', 'You must be logged in to update your profile.');
        }
        $request = $this->request;

        if ($request->getMethod() === 'POST') {

            // Retrieve POST data
            $firstname = $request->getPost('firstname');
            $lastname = $request->getPost('lastname');

            // Validate inputs
            if (empty($firstname) || empty($lastname)) {
                return redirect()->back()->with('error', 'First name and last name are required.');
            }

            // Update the user's profile in the database
            $userModel = new \App\Models\UserModel();
            $updateData = [
                'firstname' => $firstname,
                'lastname'  => $lastname,
            ];

            // if password should be changed
            $password = $request->getPost('password');
            $confirmPassword = $request->getPost('confirm_password');

            if (!empty($password)) {
                if (strlen($password) < 6) {
                    return redirect()->back()->with('error', 'Password must be at least 6 characters long.');
                }

                if ($password !== $confirmPassword) {
                    return redirect()->back()->with('error', 'Passwords do not match.');
                }
                // Update the user's password
                $updateData['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            }

            if ($userModel->updateUser($userId, $updateData)) {
                return redirect()->back()->with('success', 'Profile updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to update profile.');
            }

            return redirect()->back()->with('success', 'Profile updated successfully.');
        }
        return redirect()->back()->with('error', 'Failed to update profile.');
    }
}