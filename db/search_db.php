<?php 
require("../db/connect_db.php");

$s = $_GET['search'];
$sortby = $_GET['sortby'];
$sortbylabel = str_replace("_", " ", $sortby);

$query = "SELECT * FROM products
						WHERE category LIKE '%".$s."%' 
						OR product_name LIKE '%".$s."%'
						OR description LIKE '%".$s."%'
						ORDER BY ".$sortby.";";

	
	//echo $query;
	//echo "Category is: ".$category;
	$result = mysqli_query($dbc, $query);

	echo "<p class='feedback_yes'>Search results for <em>'$s'</em> sorted by $sortbylabel</p>";
	include ("nav_sort_menu.php");
	
	if ($result) {
			while ( $row = mysqli_fetch_array($result)){
				include ("layout_search.php");

		}
	}

?>