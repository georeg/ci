<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['URL'] = 'file controller/action name';
$route['default_controller'] = 'welcome';
$route['eric/test'] = 'egs/welcome';
$route['404_override'] = 'user/error';
$route['translate_uri_dashes'] = FALSE;
$route['user'] = 'user';

