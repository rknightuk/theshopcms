<?php 

include ("db/check_db.php");
include ("inc/header.php");
include ("inc/nav_categories.php");

?>

<!--<?php print_r($_SESSION);?>-->

<h3>Your basket</h3>

<?php

// Check if quantities have been modified
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
  # Update changed quantity field values.
  foreach ( $_POST['qty'] as $item_id => $item_qty )
  {
    # Ensure values are integers.
    $id = (int) $item_id;
    $qty = (int) $item_qty;

    # Change quantity or delete if zero.
    if ( $qty == 0 ) { unset ($_SESSION['basket'][$id]); } 
    elseif ( $qty > 0 ) { $_SESSION['basket'][$id]['quantity'] = $qty; }
  }
}

// Check if basket is empty
if (!isset($_SESSION['basket'])){
	echo "<p>There are currently no items in your basket.</p>";
}
else 	{
	require ("db/connect_db.php");

echo "<form action='basket.php' method='post'>
<table>
				<thead>
				<tr>
				<th scope='col'>Product</th>
				<th scope='col'>Price</th>
				<th scope='col'>Quantity</th>
				<th scope='col'>Sub-Total</th>
				</tr>
				</thead>";
$total = 0;
foreach ($_SESSION['basket'] as $key => $value) {
	$query = "SELECT * FROM products WHERE product_id = $key";

	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	echo "<tr><td><a href='/product.php?product_id=".$row['product_id']."'>".$row['product_name']."</td>
	<td><input class='updateq' type='text' maxlength='3' name='qty[".$row['product_id']."]' value='".$_SESSION['basket'][$key]['quantity']."'></td>
	<td>&pound;".$row['price']."</td>
	<td>&pound;".$row['price']*$_SESSION['basket'][$key]['quantity']."</td></tr>";
	$total = $total + ($row['price']*$_SESSION['basket'][$key]['quantity']);
}

echo "
<tr>
<td></td>
<td><input type='submit' class='update' value='Update'></td>
<td><strong>Total:</strong></td>
<td><strong>&pound;$total</strong></td>
</tr>
</table></form>";
}


?>


    
<?php include('inc/footer.php');?>