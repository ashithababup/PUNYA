<?php
		
		$ratn_inp = $_GET["data"];
		include('..\sql\server.php'); 
		//Reject Purchase  
		$sql = "SELECT * FROM prch_hstry WHERE p_id='$ratn_inp' and p_success='NO'";
		$results = $db->query($sql);
		if ($results->num_rows > 0) {
			$sql ="DELETE FROM prch_hstry WHERE p_id='$ratn_inp' and p_success = 'NO'";
			$results = $db->query($sql);  
			header('location: ../../card_2.php');
		} 
?>