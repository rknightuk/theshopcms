<?php

require ("connect_db.php");

$email = $_POST['email'];
$order_id = $_POST['ordernumber'];

$query = "SELECT cust_email, delivered, delivered_date
FROM customers, orders
WHERE cust_email = '".$email."' AND order_id = ".$order_id."";

$result = mysqli_query($dbc, $query);

if (mysqli_num_rows($result) > 0){
	while ($row = mysqli_fetch_array($result)) {
	echo "<p><strong>Order ID: #".$order_id." Email: <em>".$email."</em></strong><p>";
	if ($row['delivered'] == 1){
		echo "<p>Your order was delivered ".$row['delivered_date'].".</p>";
	}
	else {
		echo "<p>Your order has not been delivered yet</p>";
	}

}
}
else {
	echo "<p><strong>Sorry, this order does not exist. Please make sure your have used the correct order number and email address.</strong></p>";
}

?>
