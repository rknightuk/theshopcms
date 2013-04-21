<?php 
$title = " - Admin";

include("../inc/header_cms.php");
include("../inc/nav_admin.php");
require ("../db/connect_db.php");

?>
			
		<h2>Administration</h2>

<?php
		$query = "SELECT count(product_id), stock_level FROM products WHERE stock_level > 0";
	$result = mysqli_query($dbc, $query);

	while ($row = mysqli_fetch_array($result)){

		echo "<p>You have <a href='../'>".$row['count(product_id)']." products available</a> for sale and the most popular are: <ol>";

	}

	$query = "SELECT order_contents.product_id AS productID, product_name, COUNT(order_contents.product_id) AS popular_prod
		FROM order_contents, products
		WHERE order_contents.product_id = products.product_id
		GROUP BY order_contents.product_id
		ORDER BY popular_prod DESC
        LIMIT 5;";

		$result = mysqli_query($dbc, $query);

		while ($row = mysqli_fetch_array($result)){
			echo "<li><a href='../product.php?product_id=".$row['productID']."'>".$row['product_name']."</a> (Units sold: ".$row['popular_prod'].")</li>";
		}
		echo "</ol>";

		?>
		<h3>Sales figures for most recent orders</h3>

		<table class="sales">
			<tr><td>Order<br/>total<br/>(£)<td>
			<td><canvas id="recent_sales" height="250" width="650"></canvas></td></tr>
			<tr><td colspan="2"></td><td>Order number</td></tr>
		</table>
			

			<?php

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
	<!-- Recent sales -->
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

	var myLine = new Chart(document.getElementById("recent_sales").getContext("2d")).Bar(barChartData);

	</script>

	<?php

	$query = "SELECT order_date, delivered_date, DATEDIFF(order_date, delivered_date)
		FROM orders
		WHERE delivered = true";

	$result = mysqli_query($dbc, $query);

	$delivery_time = 0;
	$number_of_orders = 0;

	while ($row = mysqli_fetch_array($result)){

			$delivery_time += ($row['DATEDIFF(order_date, delivered_date)'] * -1);
			$number_of_orders++;
			}

	$average = $delivery_time/$number_of_orders;

	?>

	<h3>Average delivery time</h3>

	<table class="sales">
			<tr><td>Days<td>
			<td><canvas id="delivery_average" height="250" width="650"></canvas></td></tr>
			<tr><td colspan="2"></td><td>Average delivery time <br/>(This store vs. Industry average (4.2 days)</td></tr>
		</table>

	<!-- Recent sales -->
	<script>

		var barChartData = {
			labels : [""],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					data : [<?php echo $average;?>]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					data : [4.2]
				}
			]

		}

	var myLine = new Chart(document.getElementById("delivery_average").getContext("2d")).Bar(barChartData);

	</script>


		
<?php include("../inc/footer.php");?>