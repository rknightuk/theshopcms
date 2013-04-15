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
				<th scope='col'></th>
				<th scope='col'></th>
				</tr>
				</thead>";
				while ( $row = mysqli_fetch_array($result)){
					echo "<tr><td>".$row['order_id']."</td>
					<td>".$row['order_date']."</td>
					<td>£".$row['order_total']."</td>
					<td><a href='#' onclick=showDetails('".$row['order_id']."','order')>Order details</a><br/>
					<a href='#' onclick=showDetails('".$row['cust_id']."','customer')>Customer details</a></td>";

					// Checks if page is open orders or achived
					if ($open == "yes"){
						echo "<td><a href='#' onclick=markDelivered('".$row['order_id']."','".urlencode($query)."'); return false;>Mark as delivered</a></td>";
					}
					else {
						echo "<td>".$row['delivered_date']."</td>";
					}
					echo "</tr>";
				}
				echo "</table>

				<p id='details'>Hello</p>";
			}

?>