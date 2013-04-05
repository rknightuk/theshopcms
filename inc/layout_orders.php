<?php

$result = mysqli_query($dbc, $query);

			if ($result) {
				echo "
				<table>
				<thead>
				<tr>
				<th scope='col'>Order ID</th>
				<th scope='col'>Order Date</th>
				<th scope='col'>Total Spend</th>
				<th scope='col'></th>
				</tr>
				</thead>";
				while ( $row = mysqli_fetch_array($result)){
					echo "<tr><td>".$row['order_id']."</td>
					<td>".$row['order_date']."</td>
					<td>£".$row['order_total']."</td>
					<td><a href='#' onclick=markDelivered('".$row['order_id']."','".urlencode($query)."'); return false;>Mark as delivered</a></td>
					</tr>";
				}
				echo "</table>";
			}

?>