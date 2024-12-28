<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        helper([
            'form',
            'url'
        ]);
    }
    public function home()
    {
        // starte the session
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('home');
    }
    public function profile()
    {
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('profile');
    }
}