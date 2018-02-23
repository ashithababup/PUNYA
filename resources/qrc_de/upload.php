
<?php
$target_dir = "resources/qrc_de/uploads/";
include 'resources\sql\server.php';
require __DIR__ . "/vendor/autoload.php";
$target_file = "";
$filename = "";
$uploadOk = 1; 
$message = "";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if(isset($_POST["submit"])) {
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$filename = basename($_FILES["fileToUpload"]["name"]);
		if(basename($_FILES["fileToUpload"]["name"]) == ""){
			$message = "Please Select A QR Code To Decode  "; 
			echo '<div class="notification attention png_bg">
					<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div>
						'.$message.'
					</div>
				 </div>'; 
		}
		else{
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			$uploadOk = 1;
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$qrcode = new QrReader($target_file);
				$text = $qrcode->text(); //return decoded text from QR Code
				if( $text == ""){
					$message = 'Failed to Decode : The file is not a QR-CODE or An Error Occured, Please Check & Try Again Later .';
					echo'	<div class="notification error png_bg">
								<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div>
									'.$message.'
								</div>
							</div> ';
				}
				else{
					$message = 'The file has been uploaded.';
					echo '<div class="notification success png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								'.$message.'
							</div>
						</div> ';
					echo'<p id="page-intro">The De-Coded Result Will Show Below , </p>
							<div class="notification png_bg">
								<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div>
									<b>'.$text.'</b><br/>
								</div>
							</div> ';
					//check alredy exists
					$sql = "SELECT * FROM de_code WHERE file_name='$filename' ";
					$result = $db->query($sql);
					if ($result->num_rows > 0) { 
						$query =  "UPDATE de_code SET file_name='$filename',text_decoded='$text'  WHERE file_name='$filename'";
						mysqli_query($db, $query);
					}
					else{
						$query =  "INSERT INTO de_code(file_name,text_decoded) VALUES ('$filename','$text')";
						mysqli_query($db, $query);
					}
				}
		  	
			}
			else {
				$message = "Sorry, there was an error uploading your file . Please Try Again Later or Reload The Page and Try Again!"; 
				echo '<div class="notification error png_bg">
						<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								'.$message.'
							</div>
					</div>'; 
			}
		}
	}
	else {
		$message = "Please Upload A QR Code To Decode  "; 
		echo '<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
						'.$message.'
					</div>
		  		</div>'; 
	}
?>
