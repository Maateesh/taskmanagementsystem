<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'AuthController::home');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/dashboard', 'AuthController::dashboard');
$routes->get('/newtasks', 'AuthController::newtasks');
$routes->get('/profile', 'AuthController::profile');