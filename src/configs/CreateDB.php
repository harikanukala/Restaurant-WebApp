<?php
$servername = ini_get("mysql.default_host");
$username = ini_get("mysql.default_user");
$password =  ini_get("mysql.default_password");

//$link = mysqli_connect($servername,'root',$password);
$link = mysqli_connect('localhost','root','yes');
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
mysqli_query($link,'DROP DATABASE IF EXISTS HW5');
$sql = 'CREATE DATABASE HW5';
if (mysqli_query($link,$sql)) {
    echo "Database HW5 created successfully\n";
    $db_selected=mysqli_select_db($link,'HW5');
    $sql='CREATE TABLE user(
     user_id int(5) NOT NULL AUTO_INCREMENT,
     user_email VARCHAR(50),
     BALANCE FLOAT(50),
     PRIMARY KEY(user_id)
     )';
	if(mysqli_query($link,$sql)){
		echo "Table PATRON created successfully\n";
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
} else {
    echo "Error creating database: " . mysqli_connect_error() . "\n";
}
	
mysqli_close($link);
