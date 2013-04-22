<?php 
require("../db/connect_db.php");
$config = parse_ini_file( "../inc/config.ini" );
if (isset($_GET['sortby'])) {
	$sortby = $_GET['sortby'];
}
if (isset($_GET['category'])) {
	$category = $_GET["category"];
}

$page = $_GET['page'];
$items_per_page = $config['items_per_page'];

// Start of pagination
    
$query = "SELECT count(product_id) FROM products";
if (!$category == 0){
	$query .= " WHERE category = '".$category."'";
}

$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result)){
	$no_items = $row['count(product_id)'];
}

$pages = ceil($no_items/$items_per_page);

//echo "pages:".$pages." and items per page: ".$items_per_page;

$limit = ($items_per_page * $page) - $items_per_page;

echo "<nav id='pagination'><p>";

// Check if active -1 navigation arrow is needed.
if ($page == 1){
    echo "<span class='pagi_links_current'>&laquo;</span> ";
}
else {;?>
    <a href="#" onclick="changeCategory('<?php echo $category;?>','product_id', <?php echo ($page-1);?>)">&laquo;</a>
<?php }

// Modify $i if first page
if ($page == 1){
for($i = $page - 1; $i <= $pages; $i++) {
    if($i > 0 && $i < ($page + 3)) {
    	if ($page == $i){
    		echo "<span class='pagi_links_current'>$i</span>";
    	}
    	else {;?>
    		<a href="#" onclick="changeCategory('<?php echo $category;?>','product_id', <?php echo $i;?>)"><?php echo $i;?></a>
    	<?php }
    }
    }
}
// Modify $i if not first or last page
elseif ($page > 1 && $page < $pages){
    for($i = $page - 1; $i <= $pages; $i++) {
    if($i > 0 && $i < ($page + 2)) {
        if ($page == $i){
            echo "<span class='pagi_links_current'>$i</span>";
        }
        else {;?>
            <a href="#" onclick="changeCategory('<?php echo $category;?>','product_id', <?php echo $i;?>)"><?php echo $i;?></a>
        <?php }
    }
    }
}
// Modify $i if last page
else {
    for($i = $page - 2; $i <= $pages; $i++) {
    if($i > 0 && $i < ($page + 2)) {
        if ($page == $i){
            echo "<span class='pagi_links_current'>$i</span>";
        }
        else {;?>
            <a href="#" onclick="changeCategory('<?php echo $category;?>','product_id', <?php echo $i;?>)"><?php echo $i;?></a>
        <?php }
    }
    }
}

// Check if active +1 navigation arrow is needed
if ($page == $pages){
    echo " <span class='pagi_links_current'>&raquo;</span> ";
}
else {;?>
    <a href="#" onclick="changeCategory('<?php echo $category;?>','product_id', <?php echo ($page+1);?>)">&raquo;</a>
<?php }

echo "</p><p class='page_numbers'>$page of $pages</p></nav>";

if (!$category == 0) {
	$query = "SELECT * FROM products WHERE category = '".$category."' ORDER BY ".$sortby." LIMIT ".$limit.", ".$items_per_page."";
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