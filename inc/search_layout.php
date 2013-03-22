<?php

echo '<section class="search_product">

			<section class="img">
				<img src="/img/products/'.$row['photo_url'].'"/>
			</section>

			<section class="info">
				<h4><a href="/product.php?product_id='.$row['product_id'].'">'.$row['product_name'].'</a></h4>
				<p class="description">'.substr($row['description'], 0, 90).'... <a href="/product.php?product_id='.$row['product_id'].'">More info &rarr;</a></p>
			</section>

			<section class="buy">
				<p>£'.$row['price'].' / '.$row['stock_level'].' in stock</p>
				<br/>
				<p class="add_to_basket"><a href="#">Add to basket</a></p>
			</section>
						
		</section>';

	?>