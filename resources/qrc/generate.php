<?php
	
	include 'resources\sql\server.php';
	

	$username = $_SESSION['username'];
	$fulname = "";
	$today = "";
    $db_filename = 'test.png';
	$errors = array();
	//set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php"; 

    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR)){
    	mkdir($PNG_TEMP_DIR);
    }
        	
    $filename = $PNG_TEMP_DIR.'test.png';
    	
	if (isset($_POST['generate'])) { 
    
		$data  = "";
		$data1 = ""; 
		date_default_timezone_set('Asia/Kolkata');//Get Currecnt DATE & TIME of Server
		$data2 = date("Y-m-d h:i:s A"); //Set Time and Date Format as YYYY-MM-DD hh:ii:ss AM/PM
		$db_date = $data2;
		$data3 ="";
		$errorCorrectionLevel = "H";//ECC High Level 30% of recovery on damage 
		$matrixPointSize = 10;
		
		//Retriving Data From Form
		$data1 = $_POST['commo'];  
		$data3 = $_POST['amnt']; 
		
        //it's very important! to check any data is not provided
        if ($data1 == "" or $data2 == "" or $data3 == "" or $errorCorrectionLevel == "" ){
			array_push($errors, "All Fields Are Mandatory");
            ?><?php  if (count($errors) > 0) : ?>	
				<div class="notification error png_bg">
					<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div>
							<?php foreach ($errors as $error) : ?>
								<!--msg to show in notification-->
								<?php echo "$error" ?> 
							<?php endforeach ?>
						</div>
				</div><br/>
			<?php  endif ?><?php
        }
		else{

			$db_filename = md5($data2).'.png';
			$filename = $PNG_TEMP_DIR.$db_filename;

			//Get Full Name of Current user
			$sql = "SELECT fullname FROM users WHERE username='$username' ";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$fulname = $row["fullname"];
				$db_fulname = $row["fullname"];
			}
			else{
				//If session username is empty destroy sesion and redirect to login
				if (!isset($_SESSION['username'])) { session_destroy(); unset($_SESSION['username']); header('location: login.php'); }
			}

			//Checking if commodity is kerosene the unit as Litre(L) else as KiloGram(Kg)
			if ($data1 == "kerosene") {
				$data3 =$data3." L";
			}
			else{
				$data3 =$data3." Kg";
			}

			//Addding Some Text
			$data1 ="Item Packed : ".$data1;
			$data2 ="Packed Date : ".$data2;
			$data3 ="Quantity : ".$data3;
			$fulname = "Created By : ".$fulname;
			$data  = $data1." ,\r\n ".$data3." ,\r\n ".$data2." ,\r\n ".$fulname;

			// user data 
			QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 

			//Get Full Name of Current user
			$sql = "SELECT name FROM qr_gen WHERE name='$db_filename' ";
			$result = $db->query($sql);
			if ($result->num_rows > 0) { 

			}
			else{
				$query =  "INSERT INTO qr_gen(name, user_created, date_of_creation) VALUES ('$db_filename','$db_fulname','$db_date')";
				mysqli_query($db, $query);
			}
        }
    }

?>