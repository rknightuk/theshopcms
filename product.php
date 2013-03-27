<?php 

include("db/check_db.php");
include("inc/header.php");
include("inc/nav_categories.php");

?>



			<?php
			
				$product = $_GET['product_id'];
			
				require("db/connect_db.php");
				
				$query = "SELECT * FROM products WHERE product_id = '$product'";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result)){
						echo '<section class="product_ind"><h2>'.$row['product_name'].'</h2>
						<img src="/img/products/'.$row['photo_url'].'"/>
						</section>
						
						<section class="product_info">
						<h3>Product description</h3>
						<p class="description"><em>'.$row['description'].'</em></p>
						<p>£'.$row['price'].'<br/>'.$row['stock_level'].' in stock</p><br/>';

						if ($row['stock_level'] == 0){
							echo '<p class="out_of_stock">Out of stock</p></section>';
						}
						else 	{
							echo '<p class="add_to_basket"><a href="#" onclick="addToBasket('.$row['product_id'].')">Add to basket</a></p>
						</section>';
						}
						
						$category = $row['category'];
					}
				}
				else {
					echo "<p class='feedback_no'>This product doesn't exist. Try browsing the categories on the left or search for what you're looking for.</p>";
				}
				
				$query = "SELECT product_id, product_name, photo_url FROM products WHERE category = '$category' AND product_id != '$product' ORDER BY RAND() LIMIT 3";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					echo "<section class='related'><h3>Related products</h3>";
					while ( $row = mysqli_fetch_array($result)){
						echo '<section class="product_related"><h5>'.$row['product_name'].' / <a href="/product.php?product_id='.$row['product_id'].'">View &raquo;</a></h5>
						<section class="img"><img src="/img/products/'.$row['photo_url'].'"/></section><br/>
						</section>';
						
					}
					echo "</section>";
				}
			
			?>
		
<?php include('inc/footer.php');?>