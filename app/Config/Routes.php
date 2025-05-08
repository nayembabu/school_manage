<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/m', 'Home::nayem');
$routes->get('/class', 'ClassController::index');
$routes->post('/class/insert', 'ClassController::insert_class_infos');
$routes->get('/studentadmission', 'StudentAdmissionController::index');
$routes->post('/studentadmissionform', 'StudentAdmissionController::student_admission');
$routes->get('/studentadmissionview', 'StudentAdmissionController::student_admission_single_view');
$routes->get('/searchresult', 'SearchResult::result_view');
$routes->get('/seestudentresult', 'SeeStudentResultController::SeeStudentResult');







