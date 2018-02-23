<?php 
	session_start();

	$username = "";
	$password="";
	$_SESSION['role'] = 'user';
	$errors = array(); 
	$notify = array(); 


	include 'resources\sql\server.php';

	if (isset($_POST['login_form'])) {
		$username = mysqli_real_escape_string($db, $_POST['login_username']);
		$password = mysqli_real_escape_string($db, $_POST['login_password']);
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				//Login Success
				$_SESSION['success'] = "You are now logged in";
 				$_SESSION['fulname']=$fullname;
				$_SESSION['username'] = $username; 
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination"); 
			}
		}
	}
	if (isset($_POST['pswrdrst_form'])) {
		$email = mysqli_real_escape_string($db, $_POST['frgt_email']);
		if (empty($email)) {
			array_push($notify, "Email is required"); 
		} 
		if (count($errors) == 0) {
			array_push($notify, "The password reset link has send To You mail if provided mail match with our records!"); 
			$query = "SELECT * FROM users WHERE email='$email'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				//Subject
				$sub = "Password Reset Link";
				// the message
				$msg = "Please click on the link or copy paste it to the browser to reset the password \n https://www.punya.com/password?key=218s484a54z8 \n if you didn't request for password reset link please ignore.";
				// use wordwrap() if lines are longer than 70 characters
				$msg = wordwrap($msg,70);
				$headers =  'MIME-Version: 1.0' . "\r\n"; 
				$headers .= 'From: PUNYA <mail@arunov.com>' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
				// send email 
				mail($email, $sub, $msg, $headers);
			}
		}
	}

?>