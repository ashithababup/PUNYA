<?php
	include 'resources\sql\server.php';
	$username = $_SESSION['username'];
	$sql = "SELECT role,fullname FROM users WHERE username='$username' ";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$name = $row["fullname"];
		$role = $row["role"];
		$_SESSION['role']= $role;
		echo "$name";
		echo "<p id=\"page-intro\" style=\"font-size: 12px; color: #555; \">you are an ".strtoupper( $role )."</p>"; 
	}
	else{
		if (!isset($_SESSION['username'])) { header('location: login.php'); }
	}
?>