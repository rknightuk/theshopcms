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
    document.getElementById("nav_basket").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/add.php?id="+id,false);
xmlhttp.send();
}

function showBasket(){
  $("#basket_contents").slideToggle("1000");
}

function markDelivered(id, query)
        {
          xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("orders").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","update_order.php?id="+id+"&query="+query,false);
        xmlhttp.send();
        }

function emptyBasket(source)
        {
          xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById(source).innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","/empty_basket.php?source="+source,false);
        xmlhttp.send();
        var sourcePage = source;
        if (sourcePage == 'nav_basket'){
          showBasket();
        }
        }