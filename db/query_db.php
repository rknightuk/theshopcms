<?php 
require("../db/connect_db.php");
if (isset($_GET['sortby'])) {
	$sortby = $_GET['sortby'];
}
if (isset($_GET['category'])) {
	$category = $_GET["category"];
}
if (isset($_POST['search'])) {
	$s = $_POST["search"];
}


if (!$category == 0) {
	$query = "SELECT * FROM products WHERE category = '".$category."' ORDER BY ".$sortby."";
}
elseif (isset($_POST['search'])) {
	$query = "SELECT * FROM products
						WHERE category LIKE '%".$s."%' 
						OR product_name LIKE '%".$s."%'
						OR description LIKE '%".$s."%';";

}
else 	{
	$query = "SELECT * FROM products ORDER BY ".$sortby."";
}

	
	//echo $query;
	//echo "Category is: ".$category;
	$result = mysqli_query($dbc, $query);

	include ("../inc/nav_sort_menu.php");
	
	if ($result) {
			while ( $row = mysqli_fetch_array($result)){
				include ("../inc/layout_main.php");

		}
	}

?>