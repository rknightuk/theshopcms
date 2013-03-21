<?php include("db/check_db.php");?>

<?php
include ("inc/header.php");
include ("inc/nav_main.php");

if(isset($_GET['start'])){
	echo "<p class='feedback_yes'>Database and sample data created.</p>";
}
?>
	
	<section class="content">
		<script>window.onload=changeCategory(0, 'product_id')</script>
			
		</section>
		
<?php include('inc/footer.php');?>