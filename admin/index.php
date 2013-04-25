<?php 
$title = " - Admin";

include("../inc/header_cms.php");
include("../inc/nav_admin.php");
require ("../db/connect_db.php");

?>

<script>
	function getChart(monthyear){
	    $("#sales_chart").load("sales_chart.php?monthyear="+monthyear);
	  }
</script>
			
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

		Show sales figures for: <select name="sales_charts" onchange="getChart(this.value)">
			<?php

				$query = "SELECT DISTINCT MONTHNAME(order_date) AS month, YEAR(order_date) AS year FROM orders";

				$result = mysqli_query($dbc, $query);

				while ($row = mysqli_fetch_array($result)){
					echo "<option value='".$row['month'].",".$row['year']."'>".$row['month']." ".$row['year']."</option>";
				}

			?>
		</select>
			
		<section id="sales_chart">
				<?php include ("sales_chart.php");?>
		</section>

	<?php

	$query = "SELECT order_date, delivered_date, DATEDIFF(delivered_date, order_date)
		FROM orders
		WHERE delivered = true";

	$result = mysqli_query($dbc, $query);

	$delivery_time = 0;
	$number_of_orders = 0;

	while ($row = mysqli_fetch_array($result)){

			$delivery_time += $row['DATEDIFF(delivered_date, order_date)'];
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
					fillColor : "rgba(255, 83, 33, 0.5)",
					strokeColor : "rgba(255, 83, 33, 0.8)",
					data : [<?php echo $average;?>]
				},
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					data : [4.2]
				}
			]

		}

	var myLine = new Chart(document.getElementById("delivery_average").getContext("2d")).Bar(barChartData);

	</script>


		
<?php include("../inc/footer.php");?>