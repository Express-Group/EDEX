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
$route['default_controller'] = 'homecontroller';
$route['admin'] = 'cpanel/logincontroller'; 
$route['admin/login'] = 'cpanel/logincontroller/login';
$route['admin/logout'] = 'cpanel/logincontroller/logout';
$route['admin/dashboard'] = 'cpanel/admincontroller';
$route['admin/debate'] = 'cpanel/debatecontroller';
$route['admin/debate/(:any)'] = 'cpanel/debatecontroller/$1';
$route['admin/users'] = 'cpanel/userscontroller';
$route['admin/users/(:any)'] = 'cpanel/userscontroller/$1';
$route['admin/participant'] = 'cpanel/participantcontroller';
$route['admin/participant/(:any)'] = 'cpanel/participantcontroller/$1';
$route['admin/school'] = 'cpanel/schoolcontroller';
$route['admin/school/(:any)'] = 'cpanel/schoolcontroller/$1';
$route['admin/sessions'] = 'cpanel/debatecontroller/sessions';
$route['admin/sessions/create'] = 'cpanel/debatecontroller/session_create';
$route['admin/sessions/edit'] = 'cpanel/debatecontroller/session_edit';

$route['index'] = 'homecontroller/mainpage';
$route['faq'] = 'homecontroller/faq';
$route['status'] = 'homecontroller/status';
$route['sent_smtpmail'] = 'homecontroller/sent_smtpmail';
//$route['debate'] = 'homecontroller/debate';
$route['senior'] = 'homecontroller/senior';
$route['junior'] = 'homecontroller/junior';
$route['result/(:any)'] = 'homecontroller/result/$1';
$route['result_tmp/(:any)'] = 'homecontroller/result_tmp/$1';
$route['debate/(:num)/(:any)'] = 'homecontroller/article/$1';
$route['vote']['post'] = 'homecontroller/vote';
$route['register-form']['post'] = 'homecontroller/register_now';
$route['verify-otp']['post'] = 'homecontroller/verify_otp';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
