<?php include('resources\sql\login_php.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>PUNYA</title>

		<link rel="stylesheet" href="resources/css/login.css" type="text/css" media="screen" />

		<script type="text/javascript">
			$('.message a').click(function(){
   				$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
			});
		</script>
		<!-- jQuery -->
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>

		<script type="text/javascript">
			function myFunction() {
   				var mainFrameOne = document.getElementById("mainFrameOne"); 
   				var mainFrameTwo = document.getElementById("mainFrameTwo");
   				var elem = document.getElementById("myButton1");

   				mainFrameOne.style.display = (mainFrameOne.style.display == "none" ? "block" : "none"); 
   				mainFrameTwo.style.display = (mainFrameTwo.style.display == "none" ? "block" : "none"); 
   				elem.style.display = (elem.style.display == "none" ? "block" : "none");
				 
			}
		</script>
</head>
<body>
	 <div class="login-page">
  		<div class="form">
  			<!--h1 class="header-h1" id="sidebar-title"><u><b>PUNYA</b></u></h1-->
  			<img src="resources/images/_logo_.png" width="100%" height="13%"><br/><br/>
  			<?php include('errors.php'); ?>
  			<?php include('normal.php'); ?>
			<div id="mainFrameOne">
    			<form class="login-form" method="post" action="login.php" id="">
     				<input type="text" placeholder="username" name="login_username" required/>
      				<input type="password" placeholder="password" name="login_password" required/>
      				<!--div class="container floating-box"><input type="checkbox" name="rembr" value="yes"></div>Remember Me?<br/-->
      				<br/><button class="form_button" name="login_form">Login</button>
      			</form>
			</div>
			<div id="mainFrameTwo" style="display:none;">
    			<form class="login-form" method="post" action="login.php" onsubmit="" id=""  >
    				<input type="email" placeholder="E-Mail" name="frgt_email" required/><br/>
    				<button class="form_button" name="pswrdrst_form">Reset Password</button>
				</form>
			</div><br/> 
			<button class="ahref_button" onclick="myFunction()" id="myButton1">Forgot Password?</button>
 		 </div>
	</div>
</body>
</html>
