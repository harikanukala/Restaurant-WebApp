<?php
namespace Restaurant_WebApp\hw5\controllers;
use Restaurant_WebApp\hw5\models as B;
require_once 'Controller.php';

class HomeController extends Controller
{
	private $model=NULL;
	function processRequest()
	{
		$this->view("Home")->render(null);
	}
}