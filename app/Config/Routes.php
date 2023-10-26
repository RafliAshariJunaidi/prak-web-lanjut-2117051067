<?php
use App\Controllers\Home;
use app\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'UserController::index');
$routes->get('/', 'Home::index');
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profie/$1/$2/$3');
$routes->get('/user/create', 'UserController::create');
$routes->get('/user/profile/(:any)/(:any)/(:any)','UserController::profile/$1/$2/$3');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user/(:any)','UserController::show/$1');

// $routes->get('/profile', 'Home::profile');