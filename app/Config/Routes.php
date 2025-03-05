<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::login');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/emp', 'EmpController::index');
$routes->post('/emp/store', 'EmpController::store');
$routes->get('/emp/edit/(:num)', 'EmpController::edit/$1');
$routes->post('/emp/update', 'EmpController::update');
$routes->get('/emp/delete/(:num)', 'EmpController::delete/$1');
$routes->get('/logout', 'DashboardController::logout');