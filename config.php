<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE_NAME");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	$host=$_SERVER['HTTP_HOST'];
	$path=pathinfo($_SERVER['PHP_SELF']);
	$base_url=$host.$path['dirname'];
	define("BASE_URL", "https://$base_url/");
?>
