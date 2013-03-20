<?php 
include("../inc/header.php");
include("../inc/nav_cms.php");
?>

	<script type="text/javascript">
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
		    document.getElementById("table_view").innerHTML = xhr.responseText;
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
		<h2>All products</h2>
		<?php
		
			include("../db/connect_db.php");
			
			$query = "SELECT * FROM products ORDER BY category";
			
			include("../inc/table_view.php");	
			
		?>
		</div>
		
			
		
<?php include("../inc/footer.php");?>