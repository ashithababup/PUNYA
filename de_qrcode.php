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
	<!--script src="resources/qrc_de/qcode-decoder.min.js"></script-->
	<?php include('resources/sections/decor_scrpt.php'); ?>
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
						<li><a href="qrcode.php">Generate/Delete QRC</a></li>
						<li><a class="current" href="de_qrcode.php">Decode QRC</a></li>
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

			<div class="clear"></div><!-- End .clear -->
 
 			<p id="demo"></p>

 			<div class="clear"></div><!-- End .clear -->
			<!--QRCODE GENERATION CODE-->
			<?php 
					include('resources/qrc_de/upload.php');
			?>
			<!--QRCODE GENERATION CODE-->

			<div class="clear"></div> <!-- End .clear -->

			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Upload QR Code</h3>
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					
						<form action="" method="post" enctype="multipart/form-data" onsubmit="">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
																
								<p>

									<label>Select File To Upload </label> 
									 <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
								</p>
								<p>
									<input class="button" type="submit" value="Upload Image" name="submit"  />
								</p>
								
							</fieldset>

							<div class="clear"></div><!-- End .clear -->
							
						</form>        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			<div class="clear"></div>
			
			<?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>

</body>
 
 </html>
