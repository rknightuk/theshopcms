<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_admin.php");?>
		
		<h2>Open orders</h2>

		<?php
		
			include("../db/connect_db.php");
			
			echo "<section id='update_stock'>";
			
			$query = "SELECT product_id, product_name FROM products";
			
			$result = mysqli_query($dbc, $query);

			echo "<form><select>";
			while ($row = mysqli_fetch_array($result)){
				echo '<option value="'.$row['product_id'].'">'.$row['product_id'].' - '.$row['product_name'].'</option>';
			}

			echo '</select><br/>

			<label for="stock">Add stock: </label><input type="text" name="stock"/>
			</form></section>';
			
			
			
		?>	
		
<?php include("../inc/footer.php");?>