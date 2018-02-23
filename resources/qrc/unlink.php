<?php
	include '../sql/server.php';
	//receiving the file name with directory
	$f = $_GET['file']; 
	$file_nm =  $_GET['file_name']; 
	if( file_exists($f)) {
		//Remove it from Database
		$query =  "DELETE FROM qr_gen WHERE name='$file_nm'";
		//mysqli_query($db, $query);
		if ($db->query($query) === TRUE) {
    		//File Deleting
			unlink($f);
			//Redirectiong to previous qrcode.php page
			header('location: ../../qrcode.php');
		} else {
    		header('location: ../../index.php');
		}

	}

?>