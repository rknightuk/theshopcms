<?php 
		
		$resetquery = $_GET['query'];

		include("../db/connect_db.php");
		
		$product_id = $_GET['product_id'];
		
		$query = "SELECT * FROM products WHERE product_id = $product_id";
		
		$result = mysqli_query($dbc, $query);
		
		$id = "";
		$prod = "";
		$cat = "";
		$desc = "";
		$price = "";
		$stock = "";
		
		if ($result){
			while ( $row = mysqli_fetch_array($result)){
				$id = $row['product_id'];
				$prod = $row['product_name'];
				$cat = $row['category'];
				$desc = $row['description'];
				$price = $row['price'];
				$stock = $row['stock_level'];
				$product_id = $row['product_id']?>
					<p id="feedback_form"></p>
					<form method="post" id="editproduct" onsubmit='return submitForm("../db/update_db.php?product_id=<?php echo $id;?>&query=<?php echo $resetquery;?>","#editproduct","#stock_view")'>
					<?php echo "<label for='name'>Product name:</label><input type='text' name='name' value='$prod'><br/>
					<label for='category'>Category:</label><input type='text' name='category' value='$cat'><br/>
					<label for='description'>Description:</label><textarea name='description' cols='27' rows='6'>$desc</textarea><br/>
					<label for='price'>Price:</label><input type='number' step='any' name='price' value='$price'><br/>
					<label for='stock'>Stock level:</label><input type='number' name='stock' value='$stock'><br/>
					<label for='product_id'>Product ID:</label><input type='text' name='product_id' value='$product_id' readonly='readonly'><br/>
					<input type='submit' name='submit' class='submit'>
					</form>";
				}
			}
	
	
	?>