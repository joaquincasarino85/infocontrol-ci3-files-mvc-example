<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'documents';
$route['documents/upload'] = 'documents/upload';
$route['documents/status/(:any)'] = 'documents/status/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
