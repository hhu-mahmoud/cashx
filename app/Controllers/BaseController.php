<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    // Constructor to load session helper
    public function __construct()
    {
        helper('session');
    }

    // Method to check if the user is logged in
    protected function checkLoggedIn()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(site_url())->with('error', 'Please log in first.');
        }
    }

    // Method to check if the user has the necessary role
    protected function checkRole(array $roleRequired = [
        1,
        2
    ])
    {
        if (!session()->has('user_role_id') || !in_array(session('user_role_id'), $roleRequired)) {
            return redirect()->to('no-access');
        }
    }

    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        // Set locale dynamically from session
        $lang = session()->get('lang') ?? config('App')->defaultLocale;
        service('request')->setLocale($lang);
        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function before(RequestInterface $request, $arguments = null)
    {
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }

}
