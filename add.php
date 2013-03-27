<?php

session_start();

if (isset($_GET['id'])){
	$id = $_GET['id'];
}

require("db/connect_db.php");

$query = "SELECT * FROM products WHERE product_id = ".$id;

$result = mysqli_query($dbc, $query);

if ($result) {
	$row = mysqli_fetch_array( $result );

  // Check basket for the same item
  if ( isset( $_SESSION['basket'][$id] ) )
  { 
    $_SESSION['basket'][$id]['quantity']++;
    echo '<p><em>"'.$row["product_name"].'"</em> was already in your basket, so we\'ve added another one for you.</p>';
  } 
  else
  {
    $_SESSION['basket'][$id]= array ( 'quantity' => 1, 'price' => $row['price'] ) ;
    echo '<p><em>"'.$row["product_name"].'</em>" has been added to your basket.</p>' ;
  }

}

?>
