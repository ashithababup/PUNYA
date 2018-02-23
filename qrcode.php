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
	
</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">PUNYA</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/_logo_.png" width="97%" height="20%" alt="" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<a href="index.php?logout='1'" title="Sign Out" style="font-size:15px;color:red">Sign Out <i class="fa fa-power-off" aria-hidden="true" style="font-size:15px;color:red"></i></a>
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
						<li><a class="current" href="qrcode.php">Generate QRC</a></li>
						<li><a href="de_qrcode.php">Decode QRC</a></li>
						<li><a href="all_qr.php">All Generated QRC</a></li>
					</ul>
				</li>
				
				<?php  
					include('resources/sections/sec5.php');
				?>    
			<br/> <a href="#"><img src="resources/images/profile/log_5.jpg" width="97%" height="20%" alt="" /></a> 
				
			</ul> <!-- End #main-nav -->
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript> 
			<!-- Page Head -->
			<h2>Welcome <?php include('username.php') ?> </h2>
			<p id="page-intro">The Generated QR-Code Will Show Below , </p>
			
			<div class="clear"></div> <!-- End .clear -->

			<?php include('resources/qrc/generate.php'); ?>

			<!--QRCODE GENERATION CODE-->
			<?php 
				if (basename($filename) == "test.png") {
					echo '<div class="notification information  png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div>
									GENENERATE QR CODE BY FILLING THE FORM BELOW TO SHOW RESULT
								</div>
						   </div>';
				}
				else{
					echo '<div class="notification success png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								Successfully Generated , Click The "<b> Download QR  <i class="fa fa-floppy-o" aria-hidden="true"></i></b> " Button To Save The QR-CODE
							</div>
						  </div>';
					//display generated file 
					echo '<center><img src="resources/qrc/'.$PNG_WEB_DIR.basename($filename).'" class="qrcode" id="IMG_QRCODE"/></center><br/>';
					echo '<center><a href="resources/qrc/'.$PNG_WEB_DIR.basename($filename).'" download="resources/qrc/'.$PNG_WEB_DIR.basename($filename).'" class="button" ><label style="font-size: 18px; font-style: normal;">Download QR </label> <i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i></a></center>';
					echo '<br/><center><a href="resources/qrc/unlink.php?file='.$PNG_WEB_DIR.basename($filename).'&file_name='.$db_filename.'" class="button"><label style="font-size: 18px; font-style: normal;">Delete QR </label> </a></center>';
					echo '<br/><br/>';  			

				}
				
			?>
			<!--QRCODE GENERATION CODE-->


			<div class="clear"></div> <!-- End .clear -->

			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Generate QR Code</h3>
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					
						<form action="qrcode.php" method="post" onsubmit="">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
																
								<p>
									<label>Select commodity (Required)</label>              
									<select name="commo" class="large-input">
										<option value=""></option>
										<option value="rice">Rice</option>
										<option value="wheat">Wheat</option>
										<option value="sugar">Sugar</option>
										<option value="kerosene">Kerosene</option>
									</select> 
								</p>
								
								
								<!--p>
									<label>Date Of Packing  (Required)</label>
									<input class="large-input datepicker" type="date" id="datepicker-input" name="date-of-pack" />
								</p-->
								
								
								<p>
									<label>Amount Packed (in Kg)  (Required)</label>              
									<select name="amnt" class="large-input">
										<option value=""></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">4</option>
										<option value="5">5</option>
										<option value="10">10</option>
									</select> 
								</p>
								
								<!--p>
									<label>Error Correction</label>              
									<select name="ecc" class="large-input">
										<option value=""> </option>
										<option value="L">L – 7% Correction(Not Good)</option>
            							<option value="M">M – 15% Correction</option>
            							<option value="Q">Q – 25% Correction</option>
            							<option value="H">H – 30% Correction(Best)</option>
									</select> 
								</p>

								<p>
									<label>Size Of QRC</label>              
									<select name="siz" class="large-input">
										<option value=""> </option>
										<option value="1">1</option>
            							<option value="2">2</option>
            							<option value="3">3</option>
            							<option value="4">4</option>
            							<option value="5">5</option>
            							<option value="6">6</option>
            							<option value="7">7</option>
            							<option value="8">8</option>
            							<option value="9">9</option>
            							<option value="10">10</option> 
									</select> 
								</p-->

								<p>
									<input class="button" type="submit" name="generate" value="GENERATE" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div> <!-- End .clear -->

			
			<?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>

</body>
 
 </html>
