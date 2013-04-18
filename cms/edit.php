<?php 
$title = " - CMS: Edit products";

include("../inc/header_cms.php");
include("../inc/nav_cms.php");

if(isset($_GET["updated"]))
		{
			echo "<p class='feedback_yes'>Item successfully updated.</p>";
		}
?>
		<h2>All products</h2>
		<div id="table_view">
		
		<?php
		
			include("../db/connect_db.php");
			
			$query = "SELECT * FROM products ORDER BY category";
			
			include("../inc/layout_table.php");
			
		?>
		</div>
		
			
		
<?php include("../inc/footer.php");?>