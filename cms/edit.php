<?php 
include("../inc/header.php");
include("../inc/nav_cms.php");
?>
	
		<div id="table_view">
		<h2>All products</h2>
		<?php
		
			include("../db/connect_db.php");
			
			$query = "SELECT * FROM products ORDER BY category";
			
			include("../inc/layout_table.php");
			
		?>
		</div>
		
			
		
<?php include("../inc/footer.php");?>