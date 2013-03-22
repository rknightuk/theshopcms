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