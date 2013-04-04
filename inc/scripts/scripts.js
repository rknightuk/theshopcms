function changeCategory(category, sort)
{
	document.getElementById("content").innerHTML = "Loading "+category+"...";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","db/query_db.php?category="+category+"&sortby="+sort,false);
xmlhttp.send();
}


function searchSort(searchterm, sort)
{
	document.getElementById("content").innerHTML = "Loading "+searchterm+"...";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","db/search_db.php?search="+searchterm+"&sortby="+sort,false);
xmlhttp.send();
}

function delete_row(product_id, query)
    {
    if (!confirmDelete()) return false;
    if (window.XMLHttpRequest)
      {
      xhr = new XMLHttpRequest();
      }
    xhr.onreadystatechange = function()
      {
      if (xhr.readyState==4 && xhr.status==200)
        {
        document.getElementById("feedback").innerHTML = "<p class='feedback_yes'>Successful delete</p>";
        document.getElementById("table_view").innerHTML = xhr.responseText;
        }
      }
    xhr.open("GET","/db/delete_db.php?product_id="+product_id+"&query="+query, true);
    xhr.send();
    }
    
    function confirmDelete()  {
      return confirm("Are you sure you want to delete this product?");
    }

function addToBasket(id)
{
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("basket_feedback").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/add.php?id="+id,false);
xmlhttp.send();
}

function checkout()
{
  var checkout = document.getElementById("checkout")
  checkout.innerHTML='<form action="checkout.php" method="POST"><h3>Your details</h3><label for="fname">Forname:</label><input type="text" name="fname"/><br/><label for="lname">Surname:</label><input type="text" name="lname"/><br/><label for="house_number">House Number:</label><input type="text" name="house_number"><br/><label for="lname">Postcode:</label><input type="text" name="pcode"/><br/><label for="email">Email:</label><input type="text" name="email"/><br/><label for="payment">Payment method:</label><select name="payment"><option value="">Please select</option><option value="visa_debit">Visa (Debit)</option><option value="mastercard_debit">Mastercard (Debit)</option><option value="visa_credit">Visa (Credit)</option><option value="mastercard_debit">Mastercard (Credit)</option><option value="PayPal">PayPal</option></select></br></section><br/><label></label><input type="submit" value="Confirm order"></form>';
}







