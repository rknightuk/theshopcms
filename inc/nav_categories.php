<nav class="nav_main">
			
			<h4>Browse by category</h4>
			<ul>
				<li><a href="#" onclick="changeCategory(0, 'product_id', 1)">All Products</a></li>
				<?php
			
				include("db/connect_db.php");
				
				$query = "SELECT DISTINCT category FROM products
				ORDER BY category";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result)){;?>
						<li><a href="#" onclick="changeCategory('<?php echo $row['category'];?>', 'product_id', 1)"><?php echo $row['category'];?></a></li>
					<?php }
				}
			
			?>
			</ul>

			<h4>Accounts and orders</h4>

			<a href="order_status.php">Order status</a>

		</nav>
		
		<section class="content" id="content">