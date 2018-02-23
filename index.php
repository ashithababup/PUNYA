<?php 
	session_start(); 	
	if (!isset($_SESSION['username'])) {
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
	<?php 
		include('resources/sections/resource.php');

		include('username.php');
	 ?>
	<style>
		.mySlides {display:none;}
		.style1{
			color: red;
		}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
  
	<body>
		<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">PUNYA</a></h1>
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/_logo_.png" width="97%" height="20%" alt="" /></a>
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<!--a href="#messages" rel="modal" title="Messages" style="color:red">You have Pending Approvel</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> |--> <a href="index.php?logout='1'" title="Sign Out" style="font-size:15px;color:red">Sign Out <i class="fa fa-power-off" aria-hidden="true" style="font-size:15px;color:red"></i></a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Home
					</a>
					<ul>
						<li><a class="current" href="index.php">Home</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="index_1.php">Manage Comments</a></li> 
					</ul>
				</li>
				
				<?php  
					include('resources/sections/sec2.php');
					include('resources/sections/sec3.php');
					include('resources/sections/sec4.php');
					include('resources/sections/sec5.php');
				?>      
			<br/> <a href="#"><img src="resources/images/profile/log_5.jpg" width="97%" height="20%" alt="" /></a> 
				
			</ul>
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->


			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			<!--?php include('success.php') ?-->
			<!-- Page Head -->  

						<div class="content-box">
				
							<div class="content-box-content">
					
								<div class="tab-content default-tab">
					
									<marquee scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();">
										<?php
 											include 'resources\sql\server.php';
											$query = "SELECT * FROM  notify";
											$results = mysqli_query($db, $query);
											if ($results->num_rows > 0) {
												while($row = $results->fetch_assoc()) {
													echo ' 
															&emsp; 
															<span class="style1">'.$row["mesg"].'</span> 
														';
												}
												echo'<img src="resources/images/profile/neww.gif" >';
											}
										?>
									</marquee>
								</div>       
					
							</div> <!-- End .content-box-content -->
				
						</div> <!-- End .content-box -->
					<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">

					<br/><center>
						<h2 style="font-family: 'Slabo 27px', serif;  font-size: 40px; "><u>Welcome To Punya</u></h2>
					</center><br/>

					<div class="w3-content w3-section" style="max-width:100%">
  						<img class="mySlides w3-animate-top" src="resources/images/profile/img_rr_01.jpg" style="width:100%; height:340px;">
  						<img class="mySlides w3-animate-bottom" src="resources/images/profile/img_rr_02.jpg" style="width:100%; height:340px;">
  						<img class="mySlides w3-animate-top" src="resources/images/profile/img_rr_03.jpg" style="width:100%; height:340px;">
  						<img class="mySlides w3-animate-bottom" src="resources/images/profile/img_rr_04.jpg" style="width:100%; height:340px;">
					</div>
 	
				<br/>
				
				<div class="clear"></div>
				 
				<br/>
						
						<p style="font-family: Arial, Helvetica, sans-serif;  font-size: 20px; ">
							The Civil Supplies Department was originally only a regulatory Department. Subsequently, its activities have been diversified to include procurement of food grains under Minimum Support Price (MSP) , distribution of essential commodities viz. Rice, Wheat, Sugar, Kerosene, Palmolien Oil and Red gram dal through Fair Price Shops under the Public Distribution System at subsidized rates through issue of computerized cards, consumer affairs, monitoring of prices of essential commodities, distribution of LPG connections to BPL women (Deepam Scheme), Enrollment under UID (Aadhaar) etc.
						</p>
 
					 
			<div class="clear"></div>
			<!--div style="font-family: 'Orbitron', sans-serif;">12:30 PM</div-->
			
			<marquee scrolldelay="200" onmouseover="this.stop();" onmouseout="this.start();">

				<img src="resources/images/logos/1.png" >&emsp; 
				<img src="resources/images/logos/2.gif" >&emsp; 
				<img src="resources/images/logos/3.gif" >&emsp; 
				<img src="resources/images/logos/4.png" >&emsp; 
				<img src="resources/images/logos/5.png" >&emsp; 
				<img src="resources/images/logos/6.png" >

			</marquee>
				
			</div> <!-- End .content-box -->

			
			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				   var i;
				   var x = document.getElementsByClassName("mySlides");
    				for (i = 0; i < x.length; i++) {
      					x[i].style.display = "none";  
    				}
    				myIndex++;
    				if (myIndex > x.length) {myIndex = 1}    
    				x[myIndex-1].style.display = "block";  
    				setTimeout(carousel, 2500);    
				}
			</script>

			 <?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
 
 </html>
