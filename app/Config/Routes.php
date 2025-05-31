<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/m', 'Home::dash');
$routes->get('/class', 'ClassController::index');
$routes->post('/class/insert', 'ClassController::insert_class_infos');
$routes->get('/studentadmission', 'StudentAdmissionController::index');
$routes->post('/studentadmissionform', 'StudentAdmissionController::student_admission');
$routes->get('/studentadmissionview', 'StudentAdmissionController::student_admission_single_view');
$routes->get('/searchresult', 'SearchResult::result_view');
$routes->get('/seestudentresult', 'SeeStudentResultController::SeeStudentResult');
$routes->get('/student_add_from_admin_panel', 'StudentAddFromAdminPanelController::student_add_from_admin_panel');
$routes->post('/student_add_from_admin_panel_form', 'StudentAddFromAdminPanelController::student_add_from_admin_panel_form');
$routes->get('/student_search', 'StudentSearchController::class_dropdown_search');
$routes->post('/student_search', 'StudentSearchController::student_info_in_modal');
$routes->get('/teacher_add', 'TeacherController::index');
$routes->post('/teacher_save', 'TeacherController::save');
$routes->post('/single_student_info', 'StudentSearchController::single_student_info');
$routes->get('/teacher_official_info_add', 'TeacherController::teacher_official_info_add');










