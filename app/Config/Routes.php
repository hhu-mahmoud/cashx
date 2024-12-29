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
    $routes->post('dashboard', 'DashboardController::index');
    $routes->get('home', 'DashboardController::home');
    $routes->get('profile', 'DashboardController::profile');
    $routes->post('update-profile', 'ProfileController::updateProfile');
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



$routes->get('/policy', 'Home::policy');
$routes->get('/imprint', 'Home::imprint');
$routes->get('/termsOfConditions', 'Home::termsOfConditions');
$routes->get('/rightOfWithdrawal', 'Home::rightOfWithdrawal');
$routes->get('/sendMail', 'Home::sendMail');
$routes->post('/sendMail', 'Home::sendMail');
$routes->cli('task/run', 'Home::cliTask');
