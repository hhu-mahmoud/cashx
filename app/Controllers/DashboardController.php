<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends BaseController
{
    public function __construct()
    {
        helper([
            'form',
            'url',
            'app'
        ]);
    }

    public function dashboard()
    {

        // starte the session
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(site_url());
        }
        return view(caller());
    }

    public function profile()
    {
        $this->session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(site_url());
        }
        return view(caller());
    }

}