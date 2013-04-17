<?php

$email = $_POST['email'];

echo "<p>Thanks! We will notify you when this product is back in stock via <em>".$email."</em></p>";

echo "<p><a href='#' onclick='outStock(); return false;'>Close</a></p>";
?>