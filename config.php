<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE_NAME");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	define("BASE_URL", "https://$url");
?>
