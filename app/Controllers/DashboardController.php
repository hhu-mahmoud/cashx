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
    public function dashboard()
    {
        // starte the session
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(site_url());
        }
        return view('dashboard');
    }
    public function profile()
    {
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(site_url());
        }
        return view('profile');
    }
}