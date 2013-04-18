<?php

$result = mysqli_query($dbc, $query);

echo "<span id='feedback'></span>";
			
			if ($result) {
				echo "
				<table>
				<thead>
				<tr>
				<th scope='col'>Category</th>
				<th scope='col'>Product</th>
				<th scope='col'>Description</th>
				<th scope='col'>Price</th>
				<th scope='col'>Stock level</th>
				</tr>
				</thead>";
				while ( $row = mysqli_fetch_array($result)){
					echo "<tr><td>".$row['category']."</td>
					<td><a href='../product.php?product_id=".$row['product_id']."'>".$row['product_name']."</a></td>
					<td>".$row['description']."</td>
					<td>£".$row['price']."</td>
					<td>".$row['stock_level']."</td>
					<td><small><a href='../cms/edit_product.php?product_id=".$row['product_id']."'>edit</a><br/>
					<a href='#' onclick=delete_row('".$row['product_id']."','".urlencode($query)."');>delete</a></small></td></tr>";
				}
				echo "</table>";
			}?>