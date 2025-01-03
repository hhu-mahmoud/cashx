<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');
$routes->group('/', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('register', 'AuthController::register');
    $routes->post('register', 'AuthController::register');
    $routes->get('login', 'AuthController::login');
    $routes->post('login', 'AuthController::login');
    $routes->get('logout', 'AuthController::logout');
    $routes->get('dashboard', 'DashboardController::dashboard');
    $routes->get('profile', 'DashboardController::profile');
    $routes->post('update-profile', 'ProfileController::updateProfile');
    $routes->get('noAccess', 'AuthController::noAccess');
});

$routes->group('api', ['namespace' => 'App\Controllers\APIs'], ['filter' => 'apikey'], function($routes) {
    $routes->get('getResponse', 'ApiController::getResponse');
});

$routes->group('auth', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('reset-password', 'AuthController::resetPassword');
});



$routes->group('switch-language', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('(:segment)', 'LanguageController::switchLanguage/$1');
});

$routes->group('categories', ['namespace' => 'App\Controllers'], ['filter' => 'login'], function($routes) {
    $routes->get('/', 'CategoryController::index');
    $routes->get('create', 'CategoryController::create');
    $routes->post('create', 'CategoryController::create');
    $routes->get('edit/(:num)', 'CategoryController::edit/$1');
    $routes->post('edit/(:num)', 'CategoryController::edit/$1');
    $routes->get('delete/(:num)', 'CategoryController::delete/$1');
});

$routes->group('currencies', ['namespace' => 'App\Controllers'], ['filter' => 'login'], function($routes) {
    $routes->get('/', 'CurrencyController::index');
    $routes->get('create', 'CurrencyController::create');
    $routes->post('create', 'CurrencyController::create');
    $routes->get('edit/(:num)', 'CurrencyController::edit/$1');
    $routes->post('edit/(:num)', 'CurrencyController::edit/$1');
    $routes->get('delete/(:num)', 'CurrencyController::delete/$1');
});

$routes->get('/policy', 'Home::policy');
$routes->get('/imprint', 'Home::imprint');
$routes->get('/termsOfConditions', 'Home::termsOfConditions');
$routes->get('/rightOfWithdrawal', 'Home::rightOfWithdrawal');
$routes->get('/sendMail', 'Home::sendMail');
$routes->post('/sendMail', 'Home::sendMail');
$routes->cli('task/run', 'Home::cliTask');
