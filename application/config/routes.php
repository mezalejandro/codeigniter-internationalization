<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');


$route['default_controller'] = "home";
$route['404_override'] = '';


$route['^en/(.+)$'] = "$1";
$route['^es/(.+)$'] = "$1";

$route['^en$'] = $route['default_controller'];
$route['^es$'] = $route['default_controller'];
