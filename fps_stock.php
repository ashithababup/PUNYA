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
	<?php include('resources/sections/resource.php') ?>
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
					include('resources/sections/sec2.php'); ?>
				<li>
					<a href="#" class="nav-top-item current"> 
						Shops & Dealers
					</a>
					<ul>
						<li><a class="current" href="fps_stock.php">FPS Stock Register</a></li>
						<li><a href="dealers.php">Dealers Details </a></li> 
					</ul>
				</li>
					
				<?php
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
			<h2>Welcome <?php include('username.php') ?> </h2>
 
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3> </h3>
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<table>
							
							<thead>
								<tr>
								   <th>Column 1</th>
								   <th>Column 2</th>
								   <th>Column 3</th>
								   <th>Column 4</th>
								   <th>Column 5</th>
								</tr>
								
							</thead>
						 
							<tbody>
								<tr> 
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			 <?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
 
 </html>
