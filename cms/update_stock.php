<?php 
include("../inc/header_cms.php");
include("../inc/nav_cms.php");

?>

<script>

	function submitForm() {
    $.ajax({type:'POST', url: '../db/update_stock.php', data:$('#stock_input').serialize(), success: function(response) {
        $('#stock_update').html(response);
    }});

    return false;
}

</script>

		<h2>Update product stock</h2>
		<div id="stock_update">
		
			<form id="stock_input" onsubmit="return submitForm()">

				<?php
					
					require ("../db/connect_db.php");
					$query = "SELECT product_id, product_name FROM products ORDER BY product_name";
					$result = mysqli_query($dbc, $query);

					echo "<select name='product'>";

					while ($row = mysqli_fetch_array($result)){
						echo "<option value='".$row['product_id']."'>".$row['product_name']."</option>";
					}

					echo "</select><br/>

					Delivered stock: <input type='number' name='new_stock'><br/><br/>

					<input type='submit' value='Add stock'>";

				?>

			</form>

		</div>
		
			
		
<?php include("../inc/footer.php");?>