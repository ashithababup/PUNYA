<?php
if ($_SESSION['role'] == "admin") {
	echo '
		<li>
					<a href="#" class="nav-top-item">
						QR-CODE
					</a>
					<ul>
						<li><a href="qrcode.php">Generate QRC</a></li>
						<li><a href="de_qrcode.php">Decode QRD</a></li>
						<li><a href="all_qr.php">All Generated QRC</a></li>
					</ul>
				</li>
	';
}

?>