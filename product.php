<?php include("db/check_db.php");?>

<?php
include("inc/header.php");
include("inc/nav_main.php");
?>



			<?php
			
				$product = $_GET['product_id'];
			
				require("db/connect_db.php");
				
				$query = "SELECT * FROM products WHERE product_id = '$product'";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result)){
						echo '<section class="product_ind"><h3>'.$row['product_name'].'</h3>
						<img src="/img/products/'.$row['photo_url'].'"/>
						</section>
						
						<section class="product_info">
						<p class="description"><em>'.$row['description'].'</em></p>
						<p>£'.$row['price'].'<br/>'.$row['stock_level'].' in stock</p>
						<p><a href="#">Add to basket</a></p>
						</section>';
						$category = $row['category'];
					}
				}
				else {
					echo "<p class='feedback_no'>Failed to retrieve products from database. Please try again.</p>";
				}
				
				$query = "SELECT product_id, product_name, photo_url FROM products WHERE category = '$category' AND product_id != '$product' ORDER BY RAND() LIMIT 3";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					echo "<section class='related'><h3>Related products</h3>";
					while ( $row = mysqli_fetch_array($result)){
						echo '<section class="product_related"><h5>'.$row['product_name'].' / <a href="/product.php?product_id='.$row['product_id'].'">View &raquo;</a></h5>
						<img src="/img/products/'.$row['photo_url'].'"/><br/>
						</section>';
						
					}
					echo "</section>";
				}
			
			?>
		
<?php include('inc/footer.php');?>