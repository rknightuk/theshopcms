<?php 

if(!isset($_SESSION)) {
     session_start();
}

require ("db/connect_db.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$house_no = $_POST['house_number'];
$pcode = $_POST['pcode'];
$email = $_POST['email'];

// Insert customer details

// Check if returning customer

$query = "SELECT cust_id, cust_email FROM customers WHERE cust_email = '$email'";

$result = mysqli_query($dbc, $query);

// If new customers
if ($row = mysqli_fetch_array($result)){
	$cust_id = $row['cust_id'];
	echo "<p>Thanks for your repeat custom (customer #$cust_id).</p>";
}
else 	{
	$query = "INSERT INTO customers (cust_fname, cust_lname, cust_email, house_no, house_pcode)
			VALUES ('$fname', '$lname', '$email', '$house_no', '$pcode')";
	mysqli_query($dbc, $query);
	$cust_id = mysqli_insert_id($dbc);
}

// Order details
	
	// Get total

	$total = 0;
	foreach ($_SESSION['basket'] as $key => $value) {
	$query = "SELECT * FROM products WHERE product_id = $key";
	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$total = $total + ($row['price']*$_SESSION['basket'][$key]['quantity']);
	}

$query = "INSERT INTO orders (order_total, order_date, cust_id)
	VALUES ($total, now(), $cust_id)";

	mysqli_query($dbc, $query);

	$order_id = mysqli_insert_id($dbc);

	// Insert order contents into order_contents

	echo "<h3>Order details (order #$order_id)</h3>

	<h4>Items ordered:</h4>
	<p>Total: &pound;$total</p>
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

		// Remove stock from database
		$query = "UPDATE products 
			SET stock_level = stock_level - $quantity WHERE product_id = $key;";

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