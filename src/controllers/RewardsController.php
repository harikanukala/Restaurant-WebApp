<?php
namespace Restaurant_WebApp\hw5\controllers;

require_once 'Controller.php';
class RewardsController extends Controller
{
	private $model=NULL;
	function processRequest()
	{
		$this->view("Rewards")->render(null);
	}
}