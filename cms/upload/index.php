<?php
include ("../../inc/header_cms.php");
include("../../inc/nav_cms.php");

?>

<!-- Upload script modified from http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/ -->

		<h1>Upload Your Images</h1>
		<form method="post" enctype="multipart/form-data"  action="upload.php">
    		<input type="file" name="images" id="images"/>
    		<button type="submit" id="btn">Upload Files!</button>
    	</form>

  	<div id="response"></div>
	</div>
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="upload.js"></script>

<?php include('../../inc/footer.php');?>