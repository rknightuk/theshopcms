<?php session_start();?>
<!DOCTYPE HTML>
<html>

	<head>

	
		<title></title>
		
		<meta charset="UTF-8">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="/inc/style.css" />
		<script type="text/javascript" src="/inc/scripts/scripts.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
	</head>
	
	<body>
		
		<header id="head_main">

			<header class="logo">
			
				<h1><a href="/">theShop</a></h1>
			
			</header>

			<script type="text/javascript">
 
$(document).ready(function(){
 
        $(".basket_contents").hide();
        $(".show_hide").show();
 
    $('.show_hide').click(function(){
    $(".basket_contents").slideToggle();
    });
 
});
 
</script>


			
			<nav id="nav_basket">
	
				<?php include ("inc/nav_basket.php");?>
			
			</nav>
			
			<nav class="nav_search">
			
				<form method="post" action="/search.php" class="searchbox">
					<input type="text" name="search" id="search" placeholder="Search The Shop">
				</form>
			
			</nav>

			<header class="basket_contents">

				<?php include ("inc/basketsummary.php");?>

			</header>
	
	</header>
		
		<div class="clearfix"></div>