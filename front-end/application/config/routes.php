<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'home/index';
$route['contact-us'] = 'home/contact_us';
$route['about-us'] = 'home/about_us';
$route['course/(:any)'] = 'home/course_detail/$1';
$route['course-list'] = 'home/course_list';
$route['event-detail/(:any)'] = 'home/event_detail/$1';
$route['upcoming-events'] = 'home/upcoming_events';
$route['jee-top-achievers'] = 'home/jee';
$route['kcet-top-achievers'] = 'home/kcet';
$route['neet-top-achievers'] = 'home/neet';
$route['ntse-top-achievers'] = 'home/ntse';
$route['photo-gallery'] = 'home/photo_gallery';
$route['gallery-detail/(:any)'] = 'home/gallery_detail/$1';
$route['career'] = 'home/career';
$route['career-detail/(:any)'] = 'home/career_detail/$1';
$route['vrddhi'] = 'home/vrddhi';
$route['enroll/(:any)'] = 'home/enroll/$1';
$route['registration'] = 'authentication/register';
$route['student-login'] = 'authentication/login';
$route['logout'] = 'authentication/logout';
$route['otp-varification'] = 'authentication/otpVarification';
$route['forgot-password'] = 'authentication/forgot_password';
$route['set-password/(:any)'] = 'authentication/set_password/$1';

// online test
// $route['online-registration'] = 'home/online_registration';
$route['profile-setting'] = 'authentication/profile_setting';


$route['start-test'] = 'authentication/online_start_test';
$route['make-payment'] = 'authentication/online_make_payment';
$route['online-admission-puc'] = 'authentication/admission_puc';
$route['online-admission'] = 'authentication/admission';
$route['change-password'] = 'authentication/change_password';


$route['payment-detail'] = 'authentication/student_paymnet_detail';
$route['online-test'] = 'authentication/online_test';
$route['online-test/(:any)'] = 'authentication/online_test/$1';
$route['online-test/(:any)/(:any)'] = 'authentication/online_test/$1/$2';
$route['online-test/(:any)/(:any)/(:any)'] = 'authentication/online_test/$1/$2/$3';
$route['online-result/download/(:any)']	=	'test_result/downloads/$1';

$route['online-result/(:any)'] = 'authentication/online_result/$1';

