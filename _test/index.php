<!DOCTYPE HTML>
<html>

	<head>
	
		<title></title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css" />

		<style type="text/css">

		body	{
			font-family: "Helvetica", Arial, sans-serif;
			margin: 0 auto;
			width: 730px;
					}

		.search_product	{
			width: 95%;
			height: 120px;
			padding: 5px;
		}

		.search_product:nth-child(even)	{
			background-color: #f8f8f8;
		}

		.search_product h4	{
			margin-top: 10px;
		}

		.search_product .img 	{
			max-height: 100px;
			max-width: 170px;
			height: auto;
			width: auto;
			line-height: 120px;
			float: left;
		}

		.search_product img 	{
			max-height: 100px;
			max-width: 170px;
			height: auto;
			width: auto;
			vertical-align: middle;
		}

		.search_product .info	{
			float: left;
			margin-left: 10px;
			width: 340px;
		}

		.search_product .buy	{
			float: right;
			text-align: right;
		}

		.add_to_basket	a {
    	background: #dbd9d9;
    	border: 1px solid #bdbdbd;
    	padding: 10px;
    	text-decoration: none;
    }

    .add_to_basket	a:hover {
    	background: #C9C7C7;
    	color: #FF5321;
    }

		</style>
		
	</head>
	
	<body>
	
	<?php

	$query = file_get_contents("create.txt");

	echo $query;

	?>

		<section class="search_product">

			

			<section class="img">
				<img src="/img/products/sample_keyboard.png">
			</section>

			<section class="info">
				<h4>How to tell if your cat is trying to kill you</h4>
				<p class="description">Two button USB mouse with black finish. <a href="/product.php?product_id=3">More info →</a></p>
			</section>

			<section class="buy">
				<p>£3.99 / 200 in stock</p>
				<br/>
				<p class="add_to_basket"><a href="#">Add to basket</a></p>
			</section>
						
		</section>

	</body>
	
</html>