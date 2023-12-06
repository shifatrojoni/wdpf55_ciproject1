<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminHome::index');
// $routes->get('/about', 'about::index');
// $routes->get('/contact', 'contact::index');
// $routes->get('/services', 'services::index');
$routes->get('products', 'ProductController::index');
$routes->get('create', 'ProductController::create');
$routes->post('store', 'ProductController::store');

$routes->get('products/delete/(:num)', 'ProductController::delete/$1');
$routes->get('products/edit/(:num)', 'ProductController::edit/$1');
$routes->post('products/update/(:num)', 'ProductController::update/$1');

//singin,singup
$routes->get('register', 'SignupController::index');
$routes->match(['get','post'] ,'register/store','SignupController::store');


