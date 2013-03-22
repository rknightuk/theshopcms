<?php 

include("db/connect_db.php");
include("inc/header.php");
include("inc/nav_main.php");

?>
		
			<?php
			
				if(isset($_POST['search'])){
					$s = $_POST['search'];
					$query = "SELECT * FROM products
						WHERE category LIKE '%".$s."%' 
						OR product_name LIKE '%".$s."%'
						OR description LIKE '%".$s."%';";
					$result = mysqli_query($dbc, $query);
					if (!(mysqli_num_rows($result) > 0)){
						echo "<p class='feedback_no'>We don't have any products matching <em>'$s'</em>, please try searching for different keywords, or browse the categories on the left.</p>";
					}
					else {
						echo "<p class='feedback_yes'>Search results for <em>'$s'</em></p>";
						include ("inc/product_sort_menu.php");
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
								include("inc/search_layout.php");
								}
						}
					}

				?>
				
				
		
<?php include("inc/footer.php");?>