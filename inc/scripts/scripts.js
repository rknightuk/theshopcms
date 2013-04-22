function changeCategory(category, sort, page)
{
	document.getElementById("content").innerHTML = "<img class='loading' src='inc/img/loading.gif'>";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","db/query_db.php?category="+category+"&sortby="+sort+"&page="+page,false);
xmlhttp.send();
}

function sortPaged(category, sort, page, query)
{
  document.getElementById("content").innerHTML = "<img class='loading' src='inc/img/loading.gif'>";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","db/query_db.php?category="+category+"&sortby="+sort+"&page="+page+"&query="+query,false);
xmlhttp.send();
}


function searchSort(searchterm, sort)
{
	document.getElementById("content").innerHTML = "<img class='loading' src='inc/img/loading.gif'>";
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
    document.getElementById("feedback").innerHTML = "<img class='loading' src='../inc/img/loading.gif'>";
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
    xhr.open("GET","../db/delete_db.php?product_id="+product_id+"&query="+query, true);
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
xmlhttp.open("GET","add.php?id="+id,false);
xmlhttp.send();
reloadBasket();
}

function showBasket(){
  $("#basket_contents").slideToggle("1000");
}

function markDelivered(id, query)
        {
          document.getElementById("orders").innerHTML = "<img class='loading' src='../inc/img/loading.gif'>";
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

function validate(id) {
  var idmsg = id+"msg";
  document.getElementById(idmsg).style.visibility = 'visible';

}

function unvalidate(id){
  var idmsg = id+"msg";
  document.getElementById(idmsg).style.visibility = 'hidden';
}


function showDetails(order_id, cust_id)
        {
          document.getElementById("details").innerHTML = "<img class='loading' src='../inc/img/loading.gif'>";
          xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("details").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","details.php?order_id="+order_id+"&cust_id="+cust_id,false);
        xmlhttp.send();
        }

function toCaps()
{
  var x=document.getElementById("pcode");
  x.value=x.value.toUpperCase();
}

function reloadBasket(){
  xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("basket_contents").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","inc/basketsummary.php?reload=yes",false);
        xmlhttp.send();
}

function submitForm(url, formID, area) {
    $.ajax({type:'POST', url: url, data:$(formID).serialize(), success: function(response) {
        $(area).html(response);
    }});

    return false;
    var url = url;
        if (url == '../inc/outofstock.php'){
          outStock();
        }
}

function outStock(){
    $("#outstockmsg").slideToggle("fast");
  }

function editProduct(id, query)
{
  document.getElementById("stock_view").innerHTML = "<img class='loading' src='../inc/img/loading.gif'>";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("stock_view").innerHTML=xmlhttp.responseText;
    initEdit();
    }
  }
xmlhttp.open("GET","../cms/edit_product.php?product_id="+id+"&query="+query,false);
xmlhttp.send();
}

function setCategory(category){
    document.getElementById('category').value = category;
  }

function orderStatus(){
  document.getElementById("order_status").innerHTML = "<img class='loading' src='inc/img/loading.gif'>";
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("order_status").innerHTML=xmlhttp.responseText;
    initEdit();
    }
  }
xmlhttp.open("GET","order_status.php",false);
xmlhttp.send();
}