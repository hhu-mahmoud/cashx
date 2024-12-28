<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/register', 'AuthController::register');
$routes->get('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/auth/reset-password', 'AuthController::resetPassword');
$routes->get('/home', 'DashboardController::home');
$routes->get('/profile', 'DashboardController::profile');
$routes->get('switch-language/(:segment)', 'LanguageController::switchLanguage/$1');

$routes->post('/register', 'AuthController::register');
$routes->post('/auth/reset-password', 'AuthController::resetPassword');
$routes->post('/login', 'AuthController::login');
$routes->post('/dashboard', 'DashboardController::index');
$routes->post('/update-profile', 'ProfileController::updateProfile');


$routes->get('/', 'DashboardController::home');
$routes->post('/', 'DashboardController::home');
$routes->get('/policy', 'Home::policy');
$routes->get('/imprint', 'Home::imprint');
$routes->get('/termsOfConditions', 'Home::termsOfConditions');
$routes->get('/rightOfWithdrawal', 'Home::rightOfWithdrawal');
$routes->get('/sendMail', 'Home::sendMail');
$routes->post('/sendMail', 'Home::sendMail');
$routes->cli('task/run', 'Home::cliTask');
