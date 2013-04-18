<?php session_start();?>
<?php $config = parse_ini_file( "../inc/config.ini" );?>
<!DOCTYPE HTML>
<html>

	<head>

	
		<title><?php echo $config['title'];?></title>
		
		<meta charset="UTF-8">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../inc/style.css" />
		<script type="text/javascript" src="../inc/scripts/scripts.js"></script>
		<script type="text/javascript" src="../inc/scripts/chart.js"></script>
		<script src="../inc/scripts/jquery-1.9.1.min.js"></script>
		
	</head>
	
	<body>
		
		<header id="head_main">

			<header class="logo">
			
				<h1><a href="../"><?php echo $config['title'];?></a></h1>
			
			</header>
			
			<nav class="nav_admin">
	
				<ul>
					<li><a href="../">Home</a></li>
					<li><a href="../cms">CMS</a></li>
					<li><a href="../admin">Admin</a></li>
					<li><a href="../documents">Documentation</a></li>
				</ul>
			
			</nav>
			
			
	
	</header>
		
		<div class="clearfix"></div>