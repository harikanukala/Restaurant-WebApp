<?php

namespace Restaurant_WebApp\hw5;

require_once('../src/controllers/HomeController.php');
require_once('../src/controllers/MenuController.php');
require_once('../src/controllers/RewardsController.php');

// defines for various namespaces
define("NS_BASE", "Restaurant_WebApp\\hw5\\");
define(NS_BASE . "NS_CONTROLLERS", "Restaurant_WebApp\\hw5\\controllers\\");
define(NS_BASE . "NS_VIEWS", "Restaurant_WebApp\\hw5\\views\\");
define(NS_BASE . "NS_MODELS", "Restaurant_WebApp\\hw5\\models\\");
if(!isset($_GET['page'])){
$controller_name = NS_CONTROLLERS . "HomeController";
$controller = new $controller_name();
$controller->processRequest();
}
if (isset($_GET['page']))
{
	$controller_name = NS_CONTROLLERS.$_GET['page']."Controller";
	$controller = new $controller_name();
	$controller->processRequest();
}