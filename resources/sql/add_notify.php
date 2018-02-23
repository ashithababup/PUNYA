<?php
	include 'resources\sql\server.php';
	$notific = "";
    $uploadOk = 1;

	if (isset($_POST['new_notify'])) {
		$notific = mysqli_real_escape_string($db, $_POST['notify-input']);
		//Check If input is empty or not
		if (empty($notific) or $notific == " " ) {
			echo '<div class="alert alert-danger" role="alert"> Please Enter The Text To Be Shown.</div>';
    		$uploadOk = 0;
		}
		//Error Flag is 1 and No other problems then upload text
		else if($uploadOk == 1){
		
			//Insert text , From Date , To Date , Type to Database
			$query = "INSERT INTO notify (mesg) VALUES ('$notific')";
		
			//Check if sussfully updated Database
			if(mysqli_query($db, $query)){

				//True Show Success Message
				echo '<br/><div class="alert alert-success" role="alert">The Notifivation has been uploaded Successfully.</div>';
			}
		}
		//Any Error Falied To Update Database
		else{

			//Show Error Message & Remove Uploaded File
			echo '<br/><div class="alert alert-danger" role="alert">Sorry, there was an error , Try Again Later or Request For Assistance.</div>';
			$uploadOk = 0;
		} 
	}
?>