<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['URL'] = 'file controller/action name';
$route['default_controller'] = 'user/lp';
//$route['eric/test'] = 'egs/welcome';
$route['404_override'] = 'user/error';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin/top';
$route['admin/user'] = 'admin/user_list';
$route['admin/industry'] = 'admin/industry_list';
$route['admin/occupation'] = 'admin/occupation_list';

