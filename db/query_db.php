<?php 
require("../db/connect_db.php");
if (isset($_GET['sortby'])) {
	$sortby = $_GET['sortby'];
}
if (isset($_GET['category'])) {
	$category = $_GET["category"];
}

$page = $_GET['page'];
$items_per_page = 3;

$query = "SELECT count(product_id) FROM products";
if (!$category == 0){
	$query .= " WHERE category = '".$category."'";
}

$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result)){
	$no_items = $row['count(product_id)'];
}

$pages = ceil($no_items/$items_per_page);

$limit = ($items_per_page * $page) - $items_per_page;

for($i = 1; $i <= $pages; $i++) {
    if($i > 0) {
    	if ($page == $i){
    		echo "<span class='pagi_links_current'>$i</span>";
    	}
    	else {;?>
    		<span class="pagi_links"><a href="#" onclick="changeCategory('<?php echo $category;?>','product_id', <?php echo $i;?>)"><?php echo $i;?></a></span>
    	<?php }
    }
    }

if (isset($_GET['query']) && !$_GET['query'] == "") {
	$resetquery = $_GET['query'];
}

if (!$category == 0) {
	$query = "SELECT * FROM products WHERE category = '".$category."' ORDER BY ".$sortby." LIMIT ".$limit.", ".$items_per_page."";
}
elseif (isset($resetquery)){
	$query = $resetquery;
	$result = mysqli_query($dbc, $query);
	$test = "LIMIT ".$limit.", ".$items_per_page;
	$query = str_replace($test, "", $query);
		$x = explode(" ORDER",$query);
		$query = $x[0];
		$query = str_replace("products", "products WHERE product_id = 'x'", $query);
	while ($row = mysqli_fetch_array($result)){
		$query .= " OR product_id = ".$row['product_id'];
	}
	$query .= " ORDER BY ".$sortby;
	echo "</br>".$query;
}
else 	{
	$query = "SELECT * FROM products ORDER BY ".$sortby." LIMIT ".$limit.", ".$items_per_page."";
}

	$result = mysqli_query($dbc, $query);

	include ("../inc/nav_sort_menu.php");
	
	if ($result) {
			while ( $row = mysqli_fetch_array($result)){
				include ("../inc/layout_main.php");

		}
	}

?>