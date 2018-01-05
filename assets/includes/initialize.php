<?php
/**
 * User: Reid Brownell
 * Date: 10/27/17
 * Project: High School Recruitment Site
 */

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null :
	define('SITE_ROOT', DS.'Applications'.DS.'XAMPP'.DS.'xamppfiles'.DS.'htdocs'.DS.'hsrecruitment');
	//define('SITE_ROOT', DS.'home'.DS.'reidbrow'.DS.'public_html'.DS.'portfolio');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'assets'.DS.'includes');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions.php');

// load core objects
//require_once(LIB_PATH.DS.'database.php');


