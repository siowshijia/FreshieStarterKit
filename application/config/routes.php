<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// User/Staff
$route['logout'] = 'student/logout';
$route['admin/staff/login'] = 'admin_staff/index';
$route['admin/staff/dashboard'] = 'admin_staff/dashboard';
$route['admin/staff/add'] = 'admin_staff/add';
$route['admin/staff/edit/(:num)'] = 'admin_staff/edit/$1';
$route['admin/staff/delete/(:num)'] = 'admin_staff/delete/$1';

// Student
$route['admin/student/dashboard'] = 'admin_student/dashboard';
$route['admin/student/add'] = 'admin_student/add';
$route['admin/student/edit/(:num)'] = 'admin_student/edit/$1';
$route['admin/student/delete/(:num)'] = 'admin_student/delete/$1';

// Reward
$route['admin/reward/dashboard'] = 'admin_reward/dashboard';
$route['admin/reward/add'] = 'admin_reward/add';
$route['admin/reward/edit/(:num)'] = 'admin_reward/edit/$1';
$route['admin/reward/delete/(:num)'] = 'admin_reward/delete/$1';

// Quiz - Admin
$route['admin/quiz/dashboard'] = 'admin_quiz/dashboard';
$route['admin/quiz/add'] = 'admin_quiz/add';
$route['admin/quiz/edit/(:num)'] = 'admin_quiz/edit/$1';
$route['admin/quiz/delete/(:num)'] = 'admin_quiz/delete/$1';

// Event
$route['manager/event/dashboard'] = 'admin_event/managerview';
$route['manager/event/create'] = 'admin_event/managerCreate';
$route['manager/event/edit/(:num)'] = 'admin_event/managerUpdate/$1';
$route['manager/event/attendance/(:num)'] = 'admin_event/viewAttendance/$1';
$route['admin/event/dashboard'] = 'admin_event/adminview';
$route['admin/event/create'] = 'admin_event/adminCreate';
$route['admin/event/edit/(:num)'] = 'admin_event/Update/$1';
$route['admin/event/pending'] = 'admin_event/adminPending';

// Quiz - Student

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error404';
$route['translate_uri_dashes'] = FALSE;
