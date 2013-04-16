<?php
include("../inc/header_cms.php");
include("../inc/nav_cms.php");

if(isset($_GET["successadd"]))
		{
			echo "<p class='feedback_yes'><em>".$_GET['successadd']."</em> successfully added.</p>";
		}
?>
			
		
<?php include("../inc/footer.php");?>