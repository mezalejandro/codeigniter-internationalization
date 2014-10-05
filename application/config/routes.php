<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
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
  |	http://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There area two reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router what URI segments to use if those provided
  | in the URL cannot be matched to a valid route.
  |
 */


$route['default_controller'] = "home";
$route['404_override'] = '';

// example: '/en/about' -> use controller 'about'

$route['^en/(.+)$'] = "$1";
$route['^ar/(.+)$'] = "$1";
$route['^es/(.+)$'] = "$1";
$route['^us/(.+)$'] = "$1";
$route['^co/(.+)$'] = "$1";
$route['^br/(.+)$'] = "$1";

// '/en' and '/fr' -> use default controller
$route['^en$'] = $route['default_controller'];
$route['^ar$'] = $route['default_controller'];
$route['^es$'] = $route['default_controller'];
$route['^us$'] = $route['default_controller'];
$route['^co$'] = $route['default_controller'];
$route['^br$'] = $route['default_controller'];



//$route['^(\w{2})/(.*)$'] = '$2';
//$route['^(\w{2})$'] = $route['default_controller'];





/* End of file routes.php */
/* Location: ./application/config/routes.php */