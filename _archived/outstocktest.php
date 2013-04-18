<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_admin.php");?>

<script>

	function outStock(){
    $("#outstockmsg").slideToggle("fast");
  }

</script>

<a href="#" onclick="outStock()">Out of stock</a>

<?php include("../inc/footer.php");?>