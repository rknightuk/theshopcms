<?php 

include ("db/check_db.php");
include ("inc/header.php");
include ("inc/nav_categories.php");

?>

<script type="text/javascript">

function validateOrder()

{
  if( this.elements["ordernumber"].value === "" )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter your order number"; return false;
  }
  if( ( this.elements["email"].value.indexOf("@") === -1 )
   || ( this.elements["email"].value.indexOf(".") === -1 ) )
  { 
    document.getElementById("feedback_form").innerHTML = "! Please enter a valid email address"; return false;
  }
  else {
  	return submitForm('db/get_order_status.php', '#order_status', '#order_info');
  }

}

window.onload = init;

function init()
{
  var panel=document.getElementById("feedback_form");
  panel.innerHTML="<strong>!</strong> Please enter your order details";

  var form=document.getElementById("order_status");
  form.onsubmit=validateOrder;

}

</script>
	
	<h2>Track your order</h2>

	<form id="order_status">
		<p id="feedback_form"></p>
		<label for="ordernumber">Order number:</label><input type="number" name="ordernumber" id="ordernumber"><br/>
		<label for="email">Email:</label><input type="text" name="email" id="email"><br/>
		<label></label><input type="submit" value="Track order">
	</form>

	<section id="order_info">

	</section>


		
<?php include('inc/footer.php');?>