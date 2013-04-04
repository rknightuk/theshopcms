<nav class="nav_main">

			<section id="nav_basket">

				<?php include ("nav_basket.php");?>
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