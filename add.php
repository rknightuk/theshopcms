<?php

session_start() ;

if (isset($_GET['id'])){
	$id = $_GET['id'];
}

require("db/connect_db.php");

$query = "SELECT * FROM products WHERE product_id = ".$id;

$result = mysqli_query($dbc, $query);

if ($result) {
	$row = mysqli_fetch_array( $result );

  // Check cart for the same item
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
    $_SESSION['cart'][$id]['quantity']++;
    echo '<p>Another <em>"'.$row["product_name"].'"</em> has been added.</p>';
  } 
  else
  {
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['price'] ) ;
    echo '<p><em>"'.$row["product_name"].'</em>" has been added to your basket.</p>' ;
  }

}

?>
