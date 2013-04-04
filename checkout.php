<?php 

include ("db/check_db.php");
include ("inc/header.php");
include ("inc/nav_categories.php");
require ("db/connect_db.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$house_no = $_POST['house_number'];
$pcode = $_POST['pcode'];
$email = $_POST['email'];
$payment = $_POST['payment'];

// Order details
	
	// Get total

	$total = 0;
	foreach ($_SESSION['basket'] as $key => $value) {
	$query = "SELECT * FROM products WHERE product_id = $key";
	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$total = $total + ($row['price']*$_SESSION['basket'][$key]['quantity']);
	}

$query = "INSERT INTO orders (order_total, order_date)
	VALUES ($total, now())";

	mysqli_query($dbc, $query);

	$order_id = mysqli_insert_id($dbc);

	// Insert order contents into order_contents

	echo "<h3>Order details (order #9)</h3>

	<h4>Items ordered:</h4>
	<ul>";

	foreach ($_SESSION['basket'] as $key => $value) {
		$query = "SELECT * FROM products WHERE product_id = $key";
		$result = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($result);

		$quantity = $_SESSION['basket'][$key]['quantity'];
		$price = $row['price'];

		$query = "INSERT INTO order_contents (order_id, product_id, product_price, quantity)
			VALUES ($order_id, $key, $price, $quantity)";

		mysqli_query($dbc, $query);

		echo '<li>'.$quantity.' x <a href="/product.php?product_id='.$row['product_id'].'">'.$row['product_name'].'</a></li>';
	}

	echo "</ul>

	<h4>Dispatch information:</h4>
	<p>$fname $lname<br/>
	$house_no, $pcode</p>

	<p>Confirmation of this order has been sent to <em>$email</em></p>";

	session_destroy();

?>


<?php include('inc/footer.php');?>