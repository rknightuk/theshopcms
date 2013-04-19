<?php session_start();

if (!isset($title)){
	$title = "";
}
$config = parse_ini_file( "../inc/config.ini" );

?>

<!DOCTYPE HTML>
<html>

	<head>
	
		<title><?php echo $config['title'].$title;?></title>
		
		<meta charset="UTF-8">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../inc/style.css" />
		<script type="text/javascript" src="../inc/scripts/scripts.js"></script>
		<script type="text/javascript" src="../inc/scripts/chart.js"></script>
		<script src="../inc/scripts/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">

function validateProduct()

{
  if( this.elements["name"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product name"; return false;
  }
  if( this.elements["category"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product category"; return false; 
  }
  if( this.elements["description"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product description"; return false; 
  }
  if( this.elements["price"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product price"; return false; 
  }
  if( this.elements["stock"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product stock level"; return false; 
  }
  else {
  	return submitForm('../../db/add_db.php', '#addproduct', '#response');
  }

}

function init()
{
  var panel=document.getElementById("feedback_form");
  panel.innerHTML="<strong>!</strong> Please enter product details";

  var form=document.getElementById("addproduct");
  form.onsubmit=validateProduct;

}

function validateEdit()

{
  if( this.elements["name"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product name"; return false;
  }
  if( this.elements["category"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product category"; return false; 
  }
  if( this.elements["description"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product description"; return false; 
  }
  if( this.elements["price"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product price"; return false; 
  }
  if( this.elements["stock"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter product stock level"; return false; 
  }
  else {
  	return submitForm("../db/update_db.php","#editproduct","#stock_view");
  }

}

function initEdit()
{
  var panel=document.getElementById("feedback_form");
  panel.innerHTML="<strong>!</strong> Please edit details";

  var form=document.getElementById("editproduct");
  form.onsubmit=validateEdit;

}

</script>
		
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