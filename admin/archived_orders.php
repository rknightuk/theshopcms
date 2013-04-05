<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_admin.php");?>
		
		<h2>Archived Orders</h2>

		<?php
		
			include("../db/connect_db.php");
			
			echo "<section id='orders'>";
			
			$query = "SELECT * FROM orders WHERE delivered = true ORDER BY order_date";
			
			$result = mysqli_query($dbc, $query);

			if ($result) {
				echo "
				<table>
				<thead>
				<tr>
				<th scope='col'>Order ID</th>
				<th scope='col'>Order Date</th>
				<th scope='col'>Total Spend</th>
				<th scope='col'>Date Delivered</th>
				</tr>
				</thead>";
				while ( $row = mysqli_fetch_array($result)){
					echo "<tr><td>".$row['order_id']."</td>
					<td>".$row['order_date']."</td>
					<td>£".$row['order_total']."</td>
					<td>".$row['delivered_date']."</td>
					</tr>";
				}
				echo "</table>";
			}

			echo "</section>";
			
		?>	
		
<?php include("../inc/footer.php");?>