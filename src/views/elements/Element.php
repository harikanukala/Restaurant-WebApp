<?php
namespace Restaurant_WebApp\hw5\views\elements;

abstract class Element
{
	// public $view;

    public function __construct(){
        //$this->view = $view;
    }
    
    public abstract function render($data);
}