<?php 

include ("db/check_db.php");
include ("inc/header.php");
include ("inc/nav_categories.php");

?>

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

echo "<p><a href='#checkout'>Checkout</a> &darr;</p>
<form action='basket.php' method='post'>
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
<td><input type='submit' class='update' value='Update'></form></td>
<td><strong>Total:</strong></td>
<td><strong>&pound;$total</strong></td>
</tr>
</table>";


echo '<section id="checkout">

<!-- Customer details form -->
<form action="checkout.php" method="post">
<h3>Checkout: Your details</h3>

<label for="fname">Forname:</label><input type="text" name="fname"/><br/>
<label for="lname">Surname:</label><input type="text" name="lname"/><br/>
<label for="house_number">House Number:</label><input type="text" name="house_number"><br/>
<label for="pcode">Postcode:</label><input type="text" name="pcode"/><br/>
<label for="email">Email:</label><input type="text" name="email"/><br/>


<label for="payment">Payment method:</label>

  <select name="payment">
    <option value="">Please select</option>
    <option value="visa_debit">Visa (Debit)</option>
    <option value="mastercard_debit">Mastercard (Debit)</option>
    <option value="visa_credit">Visa (Credit)</option>
    <option value="mastercard_debit">Mastercard (Credit)</option>
    <option value="PayPal">PayPal</option>
  </select></br>


<br/>

<label></label><input type="submit" value="Confirm order">

</form>

</section>';
}


?>
    
<?php include('inc/footer.php');?>