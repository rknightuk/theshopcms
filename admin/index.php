<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_admin.php");?>
			
		<h2>Administration</h2>
		<h3>Sales figures for most recent orders</h3>

		<table class="sales">
			<tr><td>Order<br/>total<br/>(£)<td>
			<td><canvas id="canvas" height="250" width="650"></canvas></td></tr>
			<tr><td colspan="2"></td><td>Order number</td></tr>
		</table>
			

			<?php

				require ("../db/connect_db.php");

				$query = "SELECT order_id, order_total FROM orders LIMIT 10";

				$result = mysqli_query($dbc, $query);

				$ids = array();
				$totals = array();

				while ($row = mysqli_fetch_array($result)){
					$ids[] = $row['order_id'];
					$totals[] = $row['order_total'];
				}

			?>

	<!-- Sales chart generated using Chart.js (https://github.com/nnnick/Chart.js) -->
	<script>

		var barChartData = {
			labels : [<?php
			$arrlength=count($ids);
			
			for($x=0;$x<$arrlength;$x++)
			  {
			  echo $ids[$x].",";
			  }
			?>],
			datasets : [
				{
					fillColor : "rgba(255, 83, 33, 0.5)",
					strokeColor : "rgba(255, 83, 33, 0.8)",
					data : [<?php
			$arrlength=count($totals);
			
			for($x=0;$x<$arrlength;$x++)
			  {
			  echo $totals[$x].",";
			  }
			?>]
				}
			]

		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);

	</script>

	<?php

	$query = "SELECT count(product_id), stock_level FROM products WHERE stock_level > 0";
	$result = mysqli_query($dbc, $query);

	while ($row = mysqli_fetch_array($result)){

		echo "<p>You have <a href='../'>".$row['count(product_id)']." products available</a> for sale and ";

	}

	$query = "SELECT product_id, COUNT(product_id) AS popular_prod
		FROM order_contents
		GROUP BY product_id
		ORDER BY popular_prod DESC
        LIMIT 1;";

		$result = mysqli_query($dbc, $query);

		while ($row = mysqli_fetch_array($result)){
			$id = $row['product_id'];
			$query = "SELECT product_name FROM products WHERE product_id = $id";
			$result = mysqli_query($dbc, $query);
			while ($row = mysqli_fetch_array($result)){
				echo "<a href='../product.php?product_id=".$id."'>".$row['product_name']."</a> is the most popular.</p>";
			}
		}

	?>


		
<?php include("../inc/footer.php");?>