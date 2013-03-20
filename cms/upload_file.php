<?php 

$allowedExts = array("jpg", "jpeg", "gif", "png");
$bits = explode(".", $_FILES["file"]["name"]);
$extension = end($bits);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("../img/products/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      $exists = $_FILES["file"]["name"];
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../img/products/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      $success = $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
?>