<?php
if ($_SESSION['role'] == "admin") {
	echo'
		<li>
					<a href="#" class="nav-top-item">
						Cards
					</a>
					<ul>
						<li><a href="card_1.php">Add/Remove Card</a></li>
						<li><a href="card_2.php">New Orders</a></li>
					</ul>
				</li>
	';
}
?>