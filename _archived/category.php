<?php include("db/check_db.php");?>

<?php
include("inc/header.php");
include("inc/nav_main.php");
?>



			<?php
			
				$category = $_GET['category'];
			
				require("db/connect_db.php");
				
				$query = "SELECT * FROM products WHERE category = '$category'";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result)){
						include("inc/product_mult.php");
					}
				}
				else {
					echo "<p class='feedback_no'>Failed to retrieve products from database. Please try again.</p>";
				}
			
			?>
		
<?php include('inc/footer.php');?>