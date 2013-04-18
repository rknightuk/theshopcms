<?php
$title = " - Admin: Low stock";

include("../inc/header_cms.php");
include("../inc/nav_admin.php");?>
		
		<h2>Low stock ( < 20 available )</h2>
		<div id="table_view">

		<?php
		
			include("../db/connect_db.php");
			
			echo "<section id='low_stock'>";
			
			$query = "SELECT * FROM products WHERE stock_level < 20 ORDER BY stock_level";
			
			
			
			include("../inc/layout_table.php");

			echo "</section>";
			
			
			
		?>
	</div>
		
			
		
<?php include("../inc/footer.php");?>