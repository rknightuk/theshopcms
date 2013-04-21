<?php

	require ("../db/connect_db.php");
	if(isset($_GET['month'])){
		$month = $_GET['month'];
		$query = "SELECT order_id, order_total FROM orders WHERE MONTHNAME(order_date) = '".$month."'";
	}
	else {
		$query = "SELECT order_id, order_total FROM orders WHERE MONTHNAME(order_date) = MONTHNAME(CURDATE())";
	}

	$result = mysqli_query($dbc, $query);

	$ids = array();
	$totals = array();

	while ($row = mysqli_fetch_array($result)){
		$ids[] = $row['order_id'];
		$totals[] = $row['order_total'];
	}

?>

	<h3>Sales figures for <?php 

	if (isset($month)){
		echo $month;
	}
	else {
		echo "this month";
	}
		?>
	</h3>

<table class="sales">
			<tr><td>Order<br/>total<br/>(£)<td>
			<td><canvas id="recent_sales" height="250" width="650"></canvas></td></tr>
			<tr><td colspan="2"></td><td>Order number</td></tr>
		</table>

	<!-- Sales chart generated using Chart.js (https://github.com/nnnick/Chart.js) -->
	<!-- Recent sales -->
	<script id="runscript">

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