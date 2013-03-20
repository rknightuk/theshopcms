<nav class="nav_main">
			
			<ul>
				<?php
			
				include("db/connect_db.php");
				
				$query = "SELECT DISTINCT category FROM products
				ORDER BY category";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						echo '<li><a href="/category.php?category='.$row['category'].'">'.$row['category'].'</a></li>';
					}
				}
			
			?>
			</ul>
			
		</nav>
		
		<section class="content" id="content">