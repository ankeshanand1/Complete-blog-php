<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE_NAME");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', "https://$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']");
?>
