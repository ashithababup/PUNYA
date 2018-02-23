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
				<!--a href="#messages" rel="modal" title="Messages" style="color:red">You have Pending Approvel</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> |--> <a href="index.php?logout='1'" title="Sign Out" style="font-size:15px;color:red">Sign Out <i class="fa fa-power-off" aria-hidden="true" style="font-size:15px;color:red"></i></a>
			</div>    

			<!-- Accordion Menu -->
			<ul id="main-nav">  
				
				<?php 
					include('resources/sections/sec1.php'); 
				?>
				
				<li>
					<a href="#" class="nav-top-item current">
						Cards
					</a>
					<ul>
						<li><a class="current" href="card_1.php">Add/Remove Card</a></li>
						<li><a href="card_2.php">New Orders</a></li>
					</ul>
				</li>
				
				<?php  
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
			<h2>Welcome <?php include('username.php') ?> </h2>
			
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header"> 
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Approve New Card</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Remove Card</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<table>
							<thead>
								<tr>
									<th>Name</th>
									<th>AadarNumber</th>
									<th>Card No</th>
									<th>Salary</th>
									<th>Card Catagory</th>
									<th></th>
								</tr>
							</thead>
					
							<tbody>
								<?php
									include('resources\sql\server.php');
									$sql = "SELECT * FROM users WHERE role='user' and active='no'";
									$result = $db->query($sql);

									if ($result->num_rows > 0) {
    									
    									while($row = $result->fetch_assoc()) {
        										echo '<tr>
														<td>'.$row["fullname"].'</td>
														<td>'.$row["aadarno"].'</td>
														<td>'.$row["rationno"].'</td>	
														<td>'.$row["salary"].'</td>		
														<td>'.$row["card_catg"].'</td>
														<td>
															<a href="resources/sections/aprv_crd.php?data='.$row["rationno"].'"><img src="resources/images/icons/tick_circle.png" alt="Accept" title="Approve Card Request" width="25px" height="25px" /></a>
														</td>		
													  </tr>';
										}
									} else {
    											echo "<tr>
														<td>No Record</td>
														<td>No Record</td>
														<td>No Record</td>	
														<td>No Record</td>
														<td>No Record</td>		
								 		  			  </tr>";
									}
									$db->close();
								?>
							</tbody>
						</table>
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
						<table>
							<thead>
								<tr>
									<th>Name</th>
									<th>AadarNumber</th>
									<th>Ration Card No</th>
									<th>Salary</th>
									<th>Card Catagory</th>
									<th><center><!--Remove Card--></center></th>
								</tr>
							</thead>
					
							<tbody>
								<?php
									include('resources\sql\server.php');
									// Check connection
									if ($db->connect_error) {
    									die("Connection failed: " . $db->connect_error);
									}

									$sql = "SELECT * FROM users WHERE role='user' AND active='yes'";
									$result = $db->query($sql);

									if ($result->num_rows > 0) {
    									// output data of each row
    									while($row = $result->fetch_assoc()) {
        									echo '
												<tr>
													<td>'.$row["fullname"].'</td>
													<td>'.$row["email"].'</td>	
													<td>'.$row["rationno"].'</td>	
													<td>'.$row["salary"].'</td>		
													<td>'.$row["card_catg"].'</td>	
													<td>
														<center>
															<a href="resources/sections/rmv_card.php?data='.$row["rationno"].'">
																<img src="resources/images/icons/cross.png" alt="Remove Card" title="Remove Card" width="30px" height="30px" />
															</a>
														</center>
													</td>	
												</tr>';
										}
									} else {
    									echo "
												<tr>
													<td>No Data</td>
													<td>No Data</td>	
													<td>No Data</td>
													<td>No Data</td>	
													<td>No Data</td>	
													<td>No Data</td>	
												</tr>";
									}

								$db->close();
							?>
						</tbody>
					</table>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			 <?php include('resources/sections/footer.php') ?>
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
 
 </html>
