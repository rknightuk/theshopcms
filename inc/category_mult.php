<?php 
require("../db/connect_db.php");
$sortby = $_GET['sortby'];
$category = $_GET["category"];

if (!$category == 0) {
	$query = "SELECT * FROM products WHERE category = '".$category."' ORDER BY ".$sortby."";
}
else 	{
	$query = "SELECT * FROM products ORDER BY ".$sortby."";
}
	
	//echo $query;
	//echo "Category is: ".$category;
	$result = mysqli_query($dbc, $query);
	
	if ($result) {
			while ( $row = mysqli_fetch_array($result)){
				echo '<section class="product">
	
	<h3><a href="/product.php?product_id='.$row['product_id'].'">'.$row['product_name'].'</a></h3>
	
	<section class="img">
			
	<img src="/img/products/'.$row['photo_url'].'"/>
	
	</section>
	
	<p>£'.$row['price'].' / '.$row['stock_level'].' in stock</p>
	
	<p class="description">'.substr($row['description'], 0, 60).' <br/><a href="/product.php?product_id='.$row['product_id'].'">More info &rarr;</a></p>
	
	<p class="add_to_basket"><a href="#">Add to basket</a></p>
							
	</section>';
		}
	}

?>