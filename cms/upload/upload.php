<?php

foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../../img/products/" . $_FILES['images']['name'][$key]);
    }
}


$filename = $_FILES['images']['name'][$key];
echo "<p class='feedback_yes'>Successfully Uploaded <em>$filename</em></p>";

echo "<fieldset>
		<legend>Add a product</legend>
		<form method='post' action='../../db/add_db.php'>
		
			<label for='name'>Product name:</label><input type='text' name='name'><br/>
			<label for='category'>Category:</label><input type='text' name='category'><br/>
			<label for='description'>Description:</label><textarea cols='27' rows='6' name='description'></textarea><br/>
			<label for='price'>Price:</label><input type='text' name='price'><br/>
			<label for='stock'>Stock level:</label><input type='text' name='stock'><br/>
			<label for='url'>Image URL:</label><input type='text' name='url' readonly='readonly' value='$filename'><br/>
			<input type='submit' name='submit' class='submit'>
		
		</form>
		</fieldset>";