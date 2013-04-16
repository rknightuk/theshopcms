<?php

include ("../db/connect_db.php");

$resetquery = $_GET['query'];
$id = $_GET['id'];
$open = "yes";
$query = "UPDATE orders SET delivered = true, delivered_date = now() WHERE order_id = $id";

mysqli_query($dbc, $query);

echo "<p class='feedback_yes'>Order #$id marked as delivered</p>";

$query = $resetquery;

include ("../inc/layout_orders.php");

?>