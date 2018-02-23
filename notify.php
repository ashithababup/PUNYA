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
					include('resources/sections/sec2.php');
					include('resources/sections/sec3.php');
					include('resources/sections/sec4.php'); 
				?>    
				<li>
					<a href="#" class="nav-top-item current">
						Profile
					</a>
					<ul> 
						<li><a href="profile.php">Update Profile</a></li> 
						<li><a class="current" href="notify.php">Notification</a></li> 
					</ul>
				</li>  
			      
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
			<!--?php include('success.php') ?-->
			<!-- Page Head -->
			<h2>Welcome <?php include('username.php') ?> </h2>
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>New Notification</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<?php include('resources/sql/add_notify.php'); ?>
						 	<form action="" method="post">
						 		<p> 
									<input class="text-input large-input" type="text" id="notify-input" name="notify-input" placeholder="Enter Notification To Be Shown" />
								</p>
								<p>
									<input class="button" type="submit" name="new_notify" id="new_notify" value="Send New Notification" />
								</p>
						 	</form>					
						
						
					</div> <!-- End #tab1 --> 
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->

			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Current Showing Notifications</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<table>
							<!--thead>
								<tr>
									<th></th>
									<th></th> 
								</tr>
							</thead-->
					
							<tbody>
								<?php
 									include 'resources\sql\server.php';
									$query = "SELECT * FROM  notify";
									$results = mysqli_query($db, $query);
									if ($results->num_rows > 0) {
										while($row = $results->fetch_assoc()) {
											echo ' 
										  			<tr> 
										  				<td>'.$row["mesg"].'</td>
										  				<td>
															<center>
																<a href="resources/sections/rmv_notify.php?data='.$row["id"].'">
																	<img src="resources/images/icons/cross.png" alt="Remove Card" title="Remove Card" width="30px" height="30px" />
																</a>
															</center>
														</td>
										  			</tr> 
												';
										} 
									}
								?>
							</tbody>
						</table>
					
					</div> <!-- End #tab1 --> 
				
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<!-- End Notifications -->
			 <?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
 
 </html>
