<?php session_start();?>
<?php $config = parse_ini_file( "inc/config.ini" );?>

<?php 

$basketurl = "/basket.php";
$currentpage = $_SERVER['REQUEST_URI'];

if (isset($_GET['product_id'])) {
	$title = " - Product #".$_GET['product_id'];
}
elseif ($basketurl==$currentpage) {
	$title = " - Basket";
}
else {
	$title = " - Home";
}

?>


<!DOCTYPE HTML>
<html>

	<head>

	
		<title><?php echo $config['title'].$title;?> </title>
		
		<meta charset="UTF-8">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
		<script type="text/javascript" src="inc/scripts/scripts.js"></script>
		<script src="inc/scripts/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function(){
				  $(".basket_contents").hide();
				  $("#outstockmsg").hide();
				});
			</script>
		
	</head>
	
	<body>

		<div id="outstockmsg">

			<p>This item is currently out of stock.<br/>Enter your email below to be notified when it's available.</p>

			<form id="outofstock" onsubmit="return submitForm('../inc/outofstock.php','#outofstock','#outstockmsg')">

				<input type="text" placeholder="you@email.com" name="email">
				<input type="submit" value="Notify me!">

			</form>

			<p><a href="#" onclick="outStock(); return false;"><small>no thanks</small></a></p>
		</div>

		<header id="head_main">

			<header class="logo">
			
				<h1><a href="index.php"><?php echo $config['title'];?></a></h1>
			
			</header>
			
			<nav id="nav_basket">
	
				<?php include ("inc/nav_basket.php");?>
			
			</nav>
			
			<nav class="nav_search">
			
				<form method="post" action="/search.php" class="searchbox">
					<input type="text" name="search" list="searching" value="" id="search" placeholder="<?php echo $config['search_placehold']?>">
				
            <datalist id="searching">
              <?php 

              	require ("db/connect_db.php");
              	$query = "SELECT product_name FROM products";
              	$result = mysqli_query($dbc, $query);
              	while ($row = mysqli_fetch_array($result)){
              		echo "<option value='".$row['product_name']."'></option>";
              	}

              ?>
            </datalist>
            </form>

			</nav>

			<header id="basket_contents">

				<?php include ("inc/basketsummary.php");?>

			</header>
	
	</header>
		
		<div class="clearfix"></div>

		<script>

			

		</script>