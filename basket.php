<?php 

include ("db/check_db.php");
include ("inc/header.php");
include ("inc/nav_categories.php");

?>

<h3>Your basket</h3>

<script>
	
	


</script>

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
				<th scope='col'>Quantity</th>
				<th scope='col'>Price</th>
				<th scope='col'>Subtotal</th>
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
</table>

<p class='empty'><a href='#' onclick=emptyBasket('content'); return false;>Empty Basket</a></p>";


echo '<section id="checkout">

<!-- Customer details form -->
<form name="form" action="checkout.php" method="post">
<h3>Checkout: Your details</h3>

<label for="fname">Forname:</label><input type="text" id="fname" name="fname" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="fnamemsg" class="msg">Please enter your first name</span><br/>

<label for="lname">Surname:</label><input type="text" id="lname" name="lname" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="lnamemsg" class="msg">Please enter your surname</span><br/>

<label for="house_number">House Number:</label><input type="text" id="house_number" name="house_number" onfocus="validate(this.id)" onblur="unvalidate(this.id)"> 
<span id="house_numbermsg" class="msg">Please enter your house number</span><br/>

<label for="pcode">Postcode:</label><input type="text" id="pcode" name="pcode" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="pcodemsg" class="msg">Please enter your postcode</span><br/>

<label for="email">Email:</label><input type="text" id="email" name="email" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="emailmsg" class="msg">Please enter your email address</span><br/>

<label></label><input type="submit" value="Confirm order">

</form>

</section>';
}


?>
    
<?php include('inc/footer.php');?>