<?php
	echo '
		<li>
			<a href="#" class="nav-top-item">
						Profile
			</a>
			<ul> 
				<li><a href="profile.php">Update Profile</a></li> ';
				if ($_SESSION['role'] == "admin") {
					echo'<li><a href="notify.php">Notification</a></li>';
				} 
		echo'</ul>
		</li>
	';
?>