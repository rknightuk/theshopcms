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

		<script>//move this script

function changeCategory(category, sort)
{
	document.getElementById("content").innerHTML = "Loading "+category+"...";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","inc/category_mult.php?category="+category+"&sortby="+sort,false);
xmlhttp.send();
}
</script>
		
	</head>
	
	<body>
		
		<header>
		
			<h1><a href="/"><span class="gray">the</span>Shop</a></h1>
		
		</header>
		
		<nav class="nav_admin">

			<ul>
				<li><a href="/cms">CMS</a></li>
				<li><a href="/admin">Admin</a></li>
				<li><a href="/documents">Documentation</a></li>
			</ul>
		
		</nav>
		
		<nav class="nav_search">
		
			<form method="post" action="/search.php" class="searchbox">
				<input type="text" name="search" placeholder="Search The Shop">
			</form>
		
		</nav>
		
		<div class="clearfix"></div>