<nav id="sort">

	<p>Sort products by: <select name="aa" onchange="<?php 
		if (isset($s)) {
			echo "searchSort('$s', this.value)";
		}
		else {
			echo "changeCategory('$category', this.value)";
		}
		?>"> 
				<option value="">Please select</option>
				<option value="product_name">Name</option>
				<option value="price">Price</option>
				<option value="stock_level">Stock level</option>
			</select></p>

</nav>