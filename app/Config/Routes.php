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

$routes->group('suppliers', ['namespace' => 'App\Controllers'], ['filter' => 'login'], function($routes) {
    $routes->get('/', 'SupplierController::index');
    $routes->get('create', 'SupplierController::create');
    $routes->post('create', 'SupplierController::create');
    $routes->get('edit/(:num)', 'SupplierController::edit/$1');
    $routes->post('edit/(:num)', 'SupplierController::edit/$1');
    $routes->get('delete/(:num)', 'SupplierController::delete/$1');
});

$routes->group('notes', ['namespace' => 'App\Controllers'], ['filter' => 'login'], function($routes) {
    $routes->get('/', 'NoteController::index');
    $routes->get('create', 'NoteController::create');
    $routes->post('create', 'NoteController::create');
    $routes->get('edit/(:num)', 'NoteController::edit/$1');
    $routes->post('edit/(:num)', 'NoteController::edit/$1');
    $routes->get('delete/(:num)', 'NoteController::delete/$1');
});

$routes->group('packagingtype', ['namespace' => 'App\Controllers'], ['filter' => 'login'], function($routes) {
    $routes->get('/', 'PackagingTypeController::index');
    $routes->get('create', 'PackagingTypeController::create');
    $routes->post('create', 'PackagingTypeController::create');
    $routes->get('edit/(:num)', 'PackagingTypeController::edit/$1');
    $routes->post('edit/(:num)', 'PackagingTypeController::edit/$1');
    $routes->get('delete/(:num)', 'PackagingTypeController::delete/$1');
});

$routes->get('/policy', 'Home::policy');
$routes->get('/imprint', 'Home::imprint');
$routes->get('/termsOfConditions', 'Home::termsOfConditions');
$routes->get('/rightOfWithdrawal', 'Home::rightOfWithdrawal');
$routes->get('/sendMail', 'Home::sendMail');
$routes->post('/sendMail', 'Home::sendMail');
$routes->cli('task/run', 'Home::cliTask');
