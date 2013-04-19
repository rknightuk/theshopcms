<nav id="sort">

	<p>Sort products by: <select name="product_sort" onchange="<?php 
		if (isset($s)) {
			echo "searchSort('$s', this.value)";
		}
		elseif ($page == 1) {
			echo "changeCategory('$category', this.value, 1)";
		}
		else {
			echo "sortPaged('$category', this.value, $page, '".urlencode($query)."')";
		}
		?>"> 
				<option value="">Please select</option>
				<option value="product_name ASC">Name A - Z</option>
				<option value="product_name DESC">Name Z - A</option>
				<option value="price ASC">Price: Low - High</option>
				<option value="price DESC">Price: High - Low</option>
				<option value="stock_level ASC">Stock level: Low - High</option>
				<option value="stock_level DESC">Stock level: High - Low</option>
				
			</select></p>

</nav>