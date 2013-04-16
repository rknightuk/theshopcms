<?php 
include("../inc/header_cms.php");
include("../inc/nav_cms.php");

if(isset($_GET["updated"]))
		{
			echo "<p class='feedback_yes'>Item successfully updated.</p>";
		}
?>
		<h2>Update product stock</h2>
		<div id="stock_update">
		
			<form action="../db/update_stock.php" method="post">

				<?php
					
					require ("../db/connect_db.php");
					$query = "SELECT product_id, product_name FROM products ORDER BY product_name";
					$result = mysqli_query($dbc, $query);

					echo "<select name='product'>";

					while ($row = mysqli_fetch_array($result)){
						echo "<option value='".$row['product_id']."'>".$row['product_name']."</option>";
					}

					echo "</select><br/>

					Delivered stock: <input type='number' name='new_stock'><br/><br/>

					<input type='submit' value='Add stock'>";

				?>

			</form>

		</div>
		
			
		
<?php include("../inc/footer.php");?>