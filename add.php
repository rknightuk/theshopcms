<?php

session_start();

if (isset($_GET['id'])){
	$id = $_GET['id'];
}
if (isset($stock_error)){
  unset($stock_error);
}

require("db/connect_db.php");

$query = "SELECT price, stock_level FROM products WHERE product_id = ".$id;

$result = mysqli_query($dbc, $query);

if ($result) {
	$row = mysqli_fetch_array( $result );

  // Check basket for the same item
  if ( isset( $_SESSION['basket'][$id] ) )
  { 
    $_SESSION['basket'][$id]['quantity']++;
    if ($_SESSION['basket'][$id]['quantity'] > $row['stock_level']){
      $stock_error = "! Not enough stock";
      $_SESSION['basket'][$id]['quantity']--;
    }
    include ("inc/nav_basket.php");
  } 
  else
  {
    $_SESSION['basket'][$id]= array ( 'quantity' => 1, 'price' => $row['price'] ) ;
    include ("inc/nav_basket.php");
  }

}

?>
