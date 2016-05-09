<?php
namespace Restaurant_WebApp\hw5\models;

class Model
{
	public $link=NULL;
    function openDb() 
    {
        $servername = ini_get("mysql.default_host");
        $username = ini_get("mysql.default_user");
        $password =  ini_get("mysql.default_password");
        echo $password;
        $this->link = new mysqli($servername,'root','yes');
		if (!$this->link) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
        $mysqli->select_db("HW5");
    }
}