<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/m', 'Home::nayem');
$routes->get('/class', 'ClassController::index');
$routes->post('/class/insert', 'ClassController::insert_class_infos');


