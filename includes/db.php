<?php

//error_reporting(0);
//ini_set('display_errors', '0');

// Connection Database
$dbhost="127.0.0.1";		//your database server
$dbuser="root";		 		//user to access your database
$dbpassword=""; 			//password to access your database
$dbname="dbmoney"; 			//name of database

//Connect
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if (mysqli_connect_errno()) {
	printf("MySQLi connection failed: ", mysqli_connect_error());
	exit();
}

// Change character set to utf8
if (!$mysqli->set_charset('utf8')) {
	printf('Error loading character set utf8: %s\n', $mysqli->error);
}

?>
