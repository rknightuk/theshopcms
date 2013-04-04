<nav class="nav_main">

			<section class="basket">

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
			</section>
			
			<h4>Browse by category</h4>
			<ul>
				<li><a href="#" onclick="changeCategory(0, 'product_id')">All Products</a></li>
				<?php
			
				include("db/connect_db.php");
				
				$query = "SELECT DISTINCT category FROM products
				ORDER BY category";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						echo '<li><a href="#" onclick=changeCategory("'.$row['category'].'","product_id")>'.$row['category'].'</a></li>';
					}
				}
			
			?>
			</ul>

				<script>

				function nukedb(){
					alert('This will delete the database. Are you totally fucking sure?');
					window.location= 'nukedb.php';
				}

				</script>
				<a href="#" onclick="nukedb()">NUKE THE DB!</button>
				<a href="clearsession.php">CLEAR SESSION!</a>


		</nav>
		
		<section class="content" id="content">