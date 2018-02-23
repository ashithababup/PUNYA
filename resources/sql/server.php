<?php 
	// variable declaration
	$dbname = 'digitalration';
	$dbuser = 'root';
	$dbpass = 'root';
	$dbhost = 'localhost';
	
	// connect to database
	$db = mysqli_connect( $dbhost , $dbuser , $dbpass , $dbname );
?>