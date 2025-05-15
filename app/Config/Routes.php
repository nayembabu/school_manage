<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/m', 'Home::nayem');
$routes->get('/class', 'ClassController::index');
$routes->post('/class/insert', 'ClassController::insert_class_infos');
$routes->get('/notice', 'Notice::index');
$routes->get('/notices/(:num)', 'Notice::show/$1');
$routes->get('/contact', 'ContactController::index');
$routes->post('/contact/submit', 'ContactController::submit');
$routes->get('/admin/notice', 'AdminNoticeController::index');
$routes->get('/admin/notice/edit-notice/(:num)', 'AdminNoticeController::edit/$1');
$routes->post('/admin/notice/update-notice/(:num)', 'AdminNoticeController::update/$1');
$routes->get('/admin/notice/delete-notice/(:num)', 'AdminNoticeController::delete/$1');
$routes->get('/admin/notice/create-notice', 'AdminNoticeController::create');
$routes->post('/admin/notice/create-notice/submit', 'AdminNoticeController::submit');