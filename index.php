<?php include("db/check_db.php");?>

<?php
include ("inc/header.php");
include ("inc/nav_main.php");

if(isset($_GET['start'])){
	echo "<p class='feedback_yes'>Database and sample data created.</p>";
}
?>
			<?php
			
				require("db/connect_db.php");
				
				$query = "SELECT * FROM products";
				$result = mysqli_query($dbc, $query);
				
				if ($result) {
					while ( $row = mysqli_fetch_array($result)){
						include ("inc/product_mult.php");
					}
				}
				else {
					echo "<p class='feedback_no'>Failed to retrieve products from database. Please try again.</p>";
				}
				if (mysqli_num_rows($result) == 0){
					echo "<p class='feedback_no'>No products found, if you are the administrator, please <a href='/cms/upload.php'>add new products</a>";
				}
			
			?>
		
<?php include('inc/footer.php');?>