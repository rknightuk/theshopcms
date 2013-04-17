<?php
include("../inc/header_cms.php");
include("../inc/nav_cms.php");

if(isset($_GET["successadd"]))
		{
			echo "<p class='feedback_yes'><em>".$_GET['successadd']."</em> successfully added.</p>";
		}
?>
		
		<h2>Content Management</h2>

		<h3>Summary</h3>

		<ul>

		<?php

			require ("../db/connect_db.php");

			$query = "SELECT count(stock_level) FROM products WHERE stock_level = 0 ORDER BY stock_level";
			$result = mysqli_query($dbc, $query);

			while ($row = mysqli_fetch_array($result)){
				echo "<li>You have ".$row['count(stock_level)']." out of stock products.</li>";
			}

			$query = "SELECT count(stock_level) FROM products WHERE stock_level > 50";
			$result = mysqli_query($dbc, $query);

			while ($row = mysqli_fetch_array($result)){
				echo "<li>You have ".$row['count(stock_level)']." products with over 50 in stock.</li>";
			}

			$query = "SELECT count(product_id) FROM products";
			$result = mysqli_query($dbc, $query);

			while ($row = mysqli_fetch_array($result)){
				echo "<li>You have ".$row['count(product_id)']." products in your shop.</li>";
			}

		?>	

	</ul>
		
<?php include("../inc/footer.php");?>