<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        // starte the session
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        helper([
            'form',
            'url'
        ]);
    }
    public function home()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
}