<?php
$title = " - Admin: Archived orders";

include("../inc/header_cms.php");
include("../inc/nav_admin.php");?>
		
		<h2>Archived orders</h2>

		<?php
		
			include("../db/connect_db.php");
			
			echo "<section id='orders'>";
			
			$query = "SELECT * FROM orders WHERE delivered = true ORDER BY order_date";
			
			include ("../inc/layout_orders.php");

			echo "</section>";
			
			
			
		?>	
		
<?php include("../inc/footer.php");?>