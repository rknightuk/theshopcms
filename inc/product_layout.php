<?php

echo '<section class="product">
	
	<h3><a href="/product.php?product_id='.$row['product_id'].'">'.$row['product_name'].'</a></h3>
	
	<section class="img">
			
	<img src="/img/products/'.$row['photo_url'].'"/>
	
	</section>
	
	<p>£'.$row['price'].' / '.$row['stock_level'].' in stock</p>
	
	<p class="description">'.substr($row['description'], 0, 60).'...<br/><a href="/product.php?product_id='.$row['product_id'].'">More info &rarr;</a></p>';
	
	if ($row['stock_level'] == 0){
		echo '<p class="out_of_stock">Out of stock</p></section>';
	}
	else 	{
		echo '<p class="add_to_basket"><a href="#">Add to basket</a></p>
		</section>';
	}

	?>