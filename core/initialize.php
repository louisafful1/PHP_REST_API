<?php
// Checking directory separator = (/)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Defining SITE_ROOT constant
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp'. DS . 'htdocs' . DS . 'restapi' . DS . 'REST_API');

//xampp/htdocs/restapi/REST_API/includes
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
//xampp/htdocs/restapi/REST_API/core
defined('CORE_PATH') ? NULL : define('CORE_PATH', SITE_ROOT.DS.'core');


// load the config file first
require_once(INC_PATH.DS.'config.php');


// core classes
require_once(CORE_PATH.DS.'post.php');




?>
