<?php include("../inc/header.php");?>
<?php include("../inc/nav_admin.php");?>
		
		<?php
		
			include("../db/connect_db.php");
			
			$query = "SELECT * FROM products WHERE stock_level = 0";
			
			echo "<h2>Out of stock</h2>";
			
			include("../inc/table_view.php");
			
			$query = "SELECT * FROM products WHERE stock_level < 20 AND stock_level > 0 ORDER BY stock_level";
			
			echo "<h2>Low stock (< 5)</h2>";
			
			include("../inc/table_view.php");
			
			
			
		?>
		
			
		
<?php include("../inc/footer.php");?>