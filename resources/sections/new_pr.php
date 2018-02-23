<?php
	$servername = "localhost";
	$rrusername = "root";
	$password = "root";
	$dbname = "digitalration";

	// Create connection
	$conn = new mysqli($servername, $rrusername, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	if (isset($_SESSION['username']))
	{
		$sql = "SELECT * FROM prch_hstry WHERE p_success='NO'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
			echo "
				<thead>
       			  <tr>
       				<th><h6>ID</h6></th>
					<th><h6>Date</h6></th>
					<th><h6>Ration Card No</h6></th>
					<th><h6>Items</h6></th>
					<th><h6>Amount</h6></th>
					<th><h6>Approve/Reject</h6></th>
				  </tr>
				</thead>";
    		while($row = $result->fetch_assoc()) { 
       			echo '<tbody>
						<tr>
							<td>'.$row["p_id"].'</td>
							<td>'.$row["p_date"].'</td>
							<td>'.$row["rationno"].'</td>
							<td>'.$row["item"].'</td>	
							<td>'.$row["amnt"].'</td>
							<td>
								<a href="resources/sections/acpt_prch.php?data='.$row["p_id"].'"><img src="resources/images/icons/tick_circle.png" alt="Accept" title="Approve The Purchase" width="25px" height="25px" /></a>
								
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
								
								<a href="resources/sections/rjct_prch.php?data='.$row["p_id"].'"><img src="resources/images/icons/cross.png" alt="Reject" title="Reject The Purchase" width="25px" height="25px" /></a>
							</td>
						</tr>
				</tbody>';
			}
									
		} else {
    		echo "<h6>NO DATA , PLEASE CHECK AGAIN LATER</h6>";
		}
	}
	

	$conn->close();
?>