<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_admin.php");?>
		
		<h2>Open orders</h2>

		<?php
		
			include("../db/connect_db.php");
			
			echo "<section id='orders'>";
			
			$query = "SELECT * FROM orders WHERE delivered = false ORDER BY order_date";
			
			include ("../inc/layout_orders.php");

			echo "</section>";
			
			
			
		?>	
		
<?php include("../inc/footer.php");?>