<?php
		
		$ratn_inp = $data = $_GET["data"];
		include('..\sql\server.php'); 
		//Approve Purchase 
		$sql = "SELECT * FROM prch_hstry WHERE p_id='$ratn_inp' and p_success='NO'";
		$results = $db->query($sql);
		if ($results->num_rows > 0) {
			$sql ="UPDATE prch_hstry SET p_success = 'YES' WHERE p_id = '$ratn_inp' ";
			$results = $db->query($sql); 
			echo '<script>alert("Successfull");</script>';
			header('location: ../../card_2.php');
		} 
	
?>