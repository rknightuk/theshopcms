<?php

include('upload_file.php');
include("../inc/header.php");
include("../inc/nav_cms.php");

if(isset($success))
		{
			echo "<p class='feedback_yes'>Image <em>'$success'</em> uploaded successful.</p>";
		}
else	{
	$success = "no image uploaded";
}
if(isset($exists)){
	echo "<p class='feedback_no'>Image already exists, please rename <em>'$exists'</em> and try again.</p>";
}
?>
		
		<fieldset>
		<legend>Add a product</legend>
		<form method="post" action="../db/add_db.php">
		
			<label for="name">Product name:</label><input type="text" name="name"><br/>
			<label for="category">Category:</label><input type="text" name="category"><br/>
			<label for="description">Description:</label><textarea cols='27' rows='6' name="description"></textarea><br/>
			<label for="price">Price:</label><input type="text" name="price"><br/>
			<label for="stock">Stock level:</label><input type="text" name="stock"><br/>
			<label for="url">Image URL:</label><input type="text" name="url" readonly="readonly" value="<?php echo $success; ?>"><br/>
			<input type="submit" name="submit" class="submit">
		
		</form>
		</fieldset>
			
		
<?php include("../inc/footer.php");?>