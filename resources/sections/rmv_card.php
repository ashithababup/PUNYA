<?php
		
		$ratn_inp = $_GET["data"];
		include('..\sql\server.php'); 
		//Reject Purchase  
		$sql = "SELECT * FROM users WHERE rationno='$ratn_inp' and active='yes'";
		$results = $db->query($sql);
		if ($results->num_rows > 0) {
			$sql ="DELETE FROM users WHERE rationno='$ratn_inp' and active='yes'";
			$results = $db->query($sql);  
			header('location: ../../card_1.php');
		} 
?>