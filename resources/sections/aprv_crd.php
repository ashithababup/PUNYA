<?php
		
		$ratn_inp = $data = $_GET["data"];
		include('..\sql\server.php'); 
		//Approve Purchase 
		$sql = "SELECT * FROM users WHERE rationno='$ratn_inp' and active='no'";
		$results = $db->query($sql);
		if ($results->num_rows > 0) {
			$sql ="UPDATE users SET active='yes' WHERE rationno = '$ratn_inp' ";
			$results = $db->query($sql);  
			header('location: ../../card_1.php');
		} 
	
?>