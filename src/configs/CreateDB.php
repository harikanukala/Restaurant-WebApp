
<?php
$servername = ini_get("mysql.default_host");
$username = ini_get("mysql.default_user");
$password =  ini_get("mysql.default_password");

//$mysqli = new mysqli($servername,'root',$password);

$mysqli = new mysqli('localhost','root','');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Non-prepared statement */
if ($mysqli->query("DROP DATABASE IF EXISTS HW5") && $mysqli->query("CREATE DATABASE HW5")) {
    echo "Database HW5 created successfully\n";
    
$db_selected=$mysqli->select_db("HW5");
if($db_selected){
    echo "true";
}
$sql = "CREATE TABLE user(
     user_id int(5) NOT NULL AUTO_INCREMENT,
     user_email VARCHAR(50),
     BALANCE FLOAT(50),
     PRIMARY KEY(user_id)
     )";
    if($db_selected){
		echo "Table PATRON created successfully\n";
	} else {
	    echo "ERROR: Could not able to execute $sql. " . $mysqli->connect_error;
	}
}else {
    echo "Error creating database: " . $mysqli->connect_error. "\n";
}
	
$mysqli->close();


