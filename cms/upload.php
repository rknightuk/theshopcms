<?php
include("../inc/header.php");
include("../inc/nav_cms.php");
?>
		
		<html>
<body>

<fieldset>
		<legend>Add new product image</legend>
<form action="add_product.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</fieldset>

</body>
</html>
			
		
<?php include("../inc/footer.php");?>