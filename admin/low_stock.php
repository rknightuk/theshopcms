<?php include("../inc/header.php");?>
<?php include("../inc/nav_admin.php");?>
		
		<script type="text/javascript"> //This script is in two places
		function delete_row(product_id)
		{
		if (!confirmDelete()) return false;
		if (window.XMLHttpRequest)
		  {
		  xhr = new XMLHttpRequest();
		  }
		xhr.onreadystatechange = function()
		  {
		  if (xhr.readyState==4 && xhr.status==200)
		    {
		    document.getElementById("feedback").innerHTML = "<p class='feedback_yes'>Successful delete</p>";
		    document.getElementById("low_stock").innerHTML = xhr.responseText;
		    }
		  }
		xhr.open("GET","/db/delete_db.php?product_id="+product_id, true);
		xhr.send();
		}
		
		function confirmDelete()	{
			return confirm("Are you sure you want to delete this product?");
		}
	
	</script>

		<div id="table_view">

		<?php

			echo "<section id='no_stock'>";
		
			include("../db/connect_db.php");
			
			$query = "SELECT * FROM products WHERE stock_level = 0";
			
			echo "<h2>Out of stock</h2>";
			
			include("../inc/layout_table.php");

			echo "</section>";

			echo "<section id='low_stock'>";
			
			$query = "SELECT * FROM products WHERE stock_level < 20 AND stock_level > 0 ORDER BY stock_level";
			
			echo "<h2>Low stock (< 5)</h2>";
			
			include("../inc/layout_table.php");

			echo "</section>";
			
			
			
		?>
	</div>
		
			
		
<?php include("../inc/footer.php");?>