<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_admin.php");?>

<script>
	
	function submitForm() {
    $.ajax({type:'POST', url: 'settings_update.php', data:$('#myForm').serialize(), success: function(response) {
        $('#settings').html(response);
    }});

    return false;
}

	function resetSettings(){
  		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
   			 document.getElementById("settings").innerHTML=xmlhttp.responseText;
    		}
  		}
		xmlhttp.open("GET","settings_reset.php",false);
		xmlhttp.send();
		}
</script>
	
	<h2>Update site settings</h2>

	<div id="settings">
		<form id="myForm" onsubmit="return submitForm()">

			<label for="title">Shop title:</label><input type="text" maxlength="13" id="title" name="title" placeholder="<?php echo $config['title'];?>"><br/>
			<label for="search_placehold">Search box text:</label><input type="text" id="search_placehold" name="search_placehold" placeholder="<?php echo $config['search_placehold'];?>"><br/>
			<label for="no_items_msg">Empty basket message:</label><input type="text" id="no_items_msg" name="no_items_msg" placeholder="<?php echo $config['no_items_msg'];?>"><br/><br/>
			<label></label><input type="submit" class="button" value="Update settings">

		</form>

		<p class="empty"><a href="#" onclick="resetSettings()">SET TO DEFAULT</a></p>
	</div>
		
<?php include("../inc/footer.php");?>