<?php
namespace Restaurant_WebApp\hw5\controllers;

require_once 'Controller.php';
class MenuController extends Controller
{
	private $model=NULL;
	function processRequest()
	{
		$this->view("Menu")->render(null);
	}
}