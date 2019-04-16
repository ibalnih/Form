<?php

error_reporting(~E_NOTICE);

// 'Home' adalah default controller
$controller = isset($_GET['c']) ? $_GET['c'] : 'Home';

// 'index' adalah default method
$method = isset($_GET['m']) ? $_GET['m'] : 'index';

include_once "controllers/Controller.class.php";

include_once "controllers/$controller.class.php";

// Pergi!
(new $controller)->$method();

// Format controller
// <domain>/index.php?c=<controller>%m=<method>