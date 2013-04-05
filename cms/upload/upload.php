<?php

foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../../img/products/" . $_FILES['images']['name'][$key]);
    }
}


$filename = $_FILES['images']['name'][$key];
echo "<p class='feedback_yes'>Successfully Uploaded <em>$filename</em></p>";

echo "
		<h3>Add a product</h3>
		<form method='post' action='../../db/add_db.php'>
		
			<label for='name'>Product name:</label><input type='text' name='name' id='name' onfocus='validate(this.id)' onblur='unvalidate(this.id)'/> 
<span id='namemsg' class='msg'>Please enter the name of the product</span><br/>

			<label for='category'>Category:</label><input type='text' name='category' id='category' onfocus='validate(this.id)' onblur='unvalidate(this.id)'/> 
<span id='categorymsg' class='msg'>Please enter a category</span><br/>

			<label for='description'>Description:</label><textarea cols='27' rows='6' name='description' id='description' onfocus='validate(this.id)' onblur='unvalidate(this.id)'/> </textarea>
<span id='descriptionmsg' class='msg'>Please enter a description</span><br/>

			<label for='price'>Price:</label><input type='text' name='price' id='price' onfocus='validate(this.id)' onblur='unvalidate(this.id)'/> 
<span id='pricemsg' class='msg'>Please enter the price of the product</span><br/>

			<label for='stock'>Stock level:</label><input type='text' name='stock' id='stock' onfocus='validate(this.id)' onblur='unvalidate(this.id)'/> 
<span id='stockmsg' class='msg'>Please enter the stock level of the product</span><br/>

			<label for='url'>Image URL:</label><input type='text' name='url' readonly='readonly' value='$filename'><br/>

			<input type='submit' name='submit' class='submit'>
		
		</form>";