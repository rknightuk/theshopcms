<?php 

include ("db/check_db.php");
include ("inc/header.php");
include ("inc/nav_categories.php");

if (isset($stock_error)){
  unset($stock_error);
}

?>

<script type="text/javascript">

function validateCustomer()

{
  if( this.elements["fname"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter your first name"; return false;
  }
  if( this.elements["lname"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter your last name"; return false; 
  }
  if( this.elements["house_number"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter your house number"; return false; 
  }
  if( this.elements["pcode"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter your postcode"; return false; 
  }
  
  if( ( this.elements["email"].value.indexOf("@") === -1 )
   || ( this.elements["email"].value.indexOf(".") === -1 ) )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter a valid email address"; return false;
  }
  else {
  	return submitForm('checkout.php', '#basket', '#content');
  }

}

function init()
{
  var panel=document.getElementById("feedback_form");
  panel.innerHTML="<strong>!</strong> Please enter your details";

  var form=document.getElementById("basket");
  form.onsubmit=validateCustomer;

}

// Load initital form feedback
onload=init;

</script>

<section id="checkout_basket">
<h3>Your basket</h3>

<?php

// Check if quantities have been modified
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
  // Update changed quantity values.
  foreach ( $_POST['qty'] as $item_id => $item_qty )
  {
    // Ensure values are int
    $id = (int) $item_id;
    $qty = (int) $item_qty;

    // Change quantity or delete if <= 0.
    if ( $qty <= 0 ) { unset ($_SESSION['basket'][$id]); } 
    elseif ( $qty > 0 ) { 
      require("db/connect_db.php");
      $query = "SELECT price, stock_level FROM products WHERE product_id = ".$item_id;
      $result = mysqli_query($dbc, $query);

      $_SESSION['basket'][$id]['quantity'] = $qty; 

      if ($result) {
        $row = mysqli_fetch_array( $result );
        if ($_SESSION['basket'][$id]['quantity'] > $row['stock_level']){
          $stock_error = "<p class='feedback_msg'>! Not enough stock</p>";
          echo $stock_error;
          $_SESSION['basket'][$id]['quantity'] = $row['stock_level'];
        }
    }
      }
    }
  }

// Check if basket is empty
if (!isset($_SESSION['basket'])){
	echo "<p>There are currently no items in your basket.</p>";
}
else 	{
	require ("db/connect_db.php");

// Echo basket data
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
	echo "<tr><td><a href='product.php?product_id=".$row['product_id']."'>".$row['product_name']."</td>
	<td><input class='updateq' type='number' maxlength='3' name='qty[".$row['product_id']."]' value='".$_SESSION['basket'][$key]['quantity']."'></td>
	<td>&pound;".$row['price']."</td>";
	$subtotal = number_format($row['price']*$_SESSION['basket'][$key]['quantity'], 2, '.', '');
  echo "<td>&pound;".$subtotal."</td></tr>";
	$total = $total + ($row['price']*$_SESSION['basket'][$key]['quantity']);
  $total = number_format($total, 2, '.', '');
}?>


<tr>
<td></td>
<td><input type='submit' class='update' value='Update'></form></td>
<td><strong>Total:</strong></td>
<td><strong>&pound;<?php echo $total;?></strong></td>
</tr>
</table>

<p class='empty'><a href='#' onclick=emptyBasket('content'); return false;>Empty Basket</a></p>


<section id="checkout">

<!-- Customer details form -->
<form id="basket" onsubmit="return submitForm('checkout.php', '#basket', '#content')">

<h3>Checkout: Your details</h3>

<p id="feedback_form"></p>

<label for="fname">Forname:</label><input type="text" id="fname" name="fname" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="fnamemsg" class="msg">Please enter your first name</span><br/>

<label for="lname">Surname:</label><input type="text" id="lname" name="lname" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="lnamemsg" class="msg">Please enter your surname</span><br/>

<label for="house_number">House Number:</label><input type="number" id="house_number" name="house_number" onfocus="validate(this.id)" onblur="unvalidate(this.id)"> 
<span id="house_numbermsg" class="msg">Please enter your house number</span><br/>

<label for="pcode">Postcode:</label><input maxlength="8" type="text" id="pcode" name="pcode" onfocus="validate(this.id)" onblur="unvalidate(this.id)" onkeyup="toCaps()"/> 
<span id="pcodemsg" class="msg">Please enter your postcode</span><br/>

<label for="email">Email:</label><input type="text" id="email" name="email" onfocus="validate(this.id)" onblur="unvalidate(this.id)"/> 
<span id="emailmsg" class="msg">Please enter your email address</span><br/>

<label></label><input type="submit" value="Confirm order">

</form>

</section>
<?php }


?>

</section>
    
<?php include('inc/footer.php');?>