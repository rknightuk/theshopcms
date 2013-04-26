
				<p id="basket_feedback">

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
					$total = number_format($total, 2, '.', '');
					}
				}

				if (isset($total)) {
					if (isset($stock_error)){
						echo "$stock_error";
					}
					else {
						echo "<p class='basket_total'><strong>Total: &pound;$total</strong> (".count($_SESSION['basket'])." items)</p>";
					}

					echo "<p><a href='basket.php'>View basket</a> / <a href='#' onclick='showBasket(); return false;'>Show summary</a></p>";
				}
				else {
					echo "<p class='basket_total'><br/>".$config['no_items_msg']."</p>";
				}
				?>