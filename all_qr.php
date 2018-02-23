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
	if ($_SESSION['role'] == "user") {
		header('location: index.php');
	}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
	<?php include('resources/sections/resource.php') ?>
	<style type="text/css">
		
		.floating-img {
    		display: inline-block;
    		width: 100%;
   			height: 65%; 
		}

		.w3-card-4{
			display: inline-block;
			width: 300px;
   			height: 330px;
    		margin: 10px 10px 0px 10px; 
			box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)
		}

		.w3-container{
			padding:0px; 
		}


	</style>
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

				<?php 
					include('resources/sections/sec1.php');
					include('resources/sections/sec2.php');
					include('resources/sections/sec3.php'); 
				?>
				
				<li>
					<a href="#" class="nav-top-item current">
						QR-CODE
					</a>
					<ul>
						<li><a href="qrcode.php">Generate/Delete QRC</a></li>
						<li><a href="de_qrcode.php">Decode QRC</a></li>
						<li><a href="all_qr.php" class="current" >All Generated QRC</a></li>
					</ul>
				</li>
				
				<?php  
					include('resources/sections/sec5.php');
				?>    
				
			</ul> 
			<br/> <a href="#"><img src="resources/images/profile/log_5.jpg" width="97%" height="20%" alt="" /></a> 
			
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
			<h2>Welcome <?php include('username.php') ?> </h2>

			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Generated QR Codes	</h3>

					<?php include('resources\sql\server.php') ?>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<?php  
							
							$sql = "SELECT * FROM qr_gen";
							$result = $db->query($sql);
							if(mysqli_num_rows($result) > 0) {
								echo '<div class="notification information png_bg">
									<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
									<div>
										All Qr Code Generated are shown below , If Any One Is Missing It May Be Deleted or Occured Some Error .
									</div>
								</div>';

    							// output data of each row
    							while($row = $result->fetch_assoc()) {
										echo ' 
											<div class="w3-card-4">
    											<a href="resources/qrc/temp/'. $row["name"].'" target="_blank"><img src="resources/qrc/temp/'. $row["name"].'" alt="Q R Code" class="floating-img"></a>
    											<div class="w3-container w3-center">
     	 											<p><b>&nbsp;&nbsp;File Name :</b> <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row["name"].'</i></p>
     	 											<p><b>&nbsp;&nbsp;Created by :</b><i> ' . $row["user_created"]. '</i></p>
     	 											<p><b>&nbsp;&nbsp;Created On :</b><i>  ' . $row["date_of_creation"].'</i></p>
    											</div>
  											</div>
										';
   							 	}
							} else {
    							echo '
    								<div class="notification error png_bg">
										<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
										<div>
											No Q R Code To Show
										</div>
									</div>
    							';
							}
						?>  
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<h3>Tab 2</h3>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			<div class="clear"></div>
 
			 <?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
 
 </html>
