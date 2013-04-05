<h4>Your basket</h4>
				<p id="basket_feedback"><?php 

				if (!isset($_SESSION['basket'])){
					echo "0 items in your basket.</p>";
				}
				else 	{
					echo count($_SESSION['basket'])." items in your basket.</p>";
				}

				?>

				<?php 

				if (!isset($_SESSION['basket'])){
					
				}
				else 	{
					require ("db/connect_db.php");

					echo "<table>";
	
					$total = 0;
					foreach ($_SESSION['basket'] as $key => $value) {
						$query = "SELECT * FROM products WHERE product_id = $key";
					
						$result = mysqli_query($dbc, $query);
						$row = mysqli_fetch_array($result);
					
						echo "<tr><td>".$_SESSION['basket'][$key]['quantity']." x ".substr($row['product_name'], 0, 20)."</td></tr>";
					}

				echo "</table>";

				}
				?>

				<!-- Display total -->
				<?php

				if (!isset($_SESSION['basket'])){
					
				}
				else 	{
					require ("db/connect_db.php");
					$total = 0;
					foreach ($_SESSION['basket'] as $key => $value) {
					$query = "SELECT * FROM products WHERE product_id = $key";
					$result = mysqli_query($dbc, $query);
					$row = mysqli_fetch_array($result);
					$total = $total + ($row['price']*$_SESSION['basket'][$key]['quantity']);
					}
				}

				if (isset($total)) {
					echo "<p class='basket_total'><strong>Total: &pound;$total</strong></p>";
				}
				else {
					echo "<p class='basket_total'></p>";
				}
				?>

				<a href="basket.php">View basket</a>