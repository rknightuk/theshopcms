<?php 

echo '<section class="product"><h3>'.$row['product_name'].'</h3>
						<img src="/img/products/'.$row['photo_url'].'"/>
						<p>£'.$row['price'].' / '.$row['stock_level'].' in stock</p>
						<p class="description">'.substr($row['description'], 0, 100).' <a href="/product.php?product_id='.$row['product_id'].'">More info &rarr;</a></p>
						<p><a href="#">Add to basket</a></p>
						</section>';

?>