<?php

foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../img/products/" . $_FILES['images']['name'][$key]);
    }
}


$filename = $_FILES['images']['name'][$key];?>

<p class='feedback_yes'>Successfully Uploaded <em><?php echo $filename;?></em></p>

<h3>Add a product</h3>

<form id='addproduct' onsubmit="return submitForm('../../db/add_db.php', '#addproduct', '#response')">

	<p id='feedback_form'></p>

			<br/><label for='category_dd'>Choose an existing category:</label>
			<select name="category_dd" onchange="setCategory(this.value)">
				<option>category list</option>
				<?php

					require ("../db/connect_db.php");

					$query = "SELECT DISTINCT category FROM products";
					$result = mysqli_query($dbc, $query);

					while ($row = mysqli_fetch_array($result)){
						echo "<option value='".$row['category']."'>".$row['category']."</option>";
					}

				?>
			</select><br/><br/>

			<label for='category'>or create a new one:</label><input value="" type='text' list="categories" name='category' id='category'/> <br/>
		
			<label for='name'>Product name:</label><input type='text' name='name' id='name'/><br/>

			<label for='description'>Description:</label><textarea cols='27' rows='6' name='description' id='description'/> </textarea><br/>

			<label for='price'>Price:</label><input type='number' step='any' name='price' id='price'/> <br/>

			<label for='stock'>Stock level:</label><input type='number' name='stock' id='stock'/> <br/>

			<label for='url'>Image URL:</label><input type='text' name='url' readonly='readonly' value='<?php echo $filename;?>'><br/>

			<input type='submit' name='submit' class='submit'>
		
		</form>