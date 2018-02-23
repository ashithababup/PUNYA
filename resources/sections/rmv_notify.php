<?php
		
		$ratn_inp = $_GET["data"];
		include('..\sql\server.php'); 
		//Reject Purchase  
		$sql = "SELECT * FROM notify WHERE id='$ratn_inp'";
		$results = $db->query($sql);
		if ($results->num_rows > 0) {
			$sql ="DELETE FROM notify WHERE id='$ratn_inp'";
			$results = $db->query($sql);  
			header('location: ../../notify.php');
		} 
?>