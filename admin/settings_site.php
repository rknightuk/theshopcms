<?php
$title = " - Admin: Site settings";

include("../inc/header_cms.php");
include("../inc/nav_admin.php");?>

<script>

	function resetSettings(source){
  		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
   			 document.getElementById("settings_update").innerHTML=xmlhttp.responseText;
    		}
  		}
		xmlhttp.open("GET","settings_reset.php?source="+source,false);
		xmlhttp.send();
		}
</script>
	
	<h2>Update site settings</h2>

	<div id="settings">
		<form id="settings_update" onsubmit="return submitForm('settings_update.php', '#settings_update', '#settings')">

			<label for="title">Shop title:</label><input type="text" maxlength="13" id="title" name="title" placeholder="<?php echo $config['title'];?>"><br/>
			<label for="search_placehold">Search box text:</label><input type="text" id="search_placehold" name="search_placehold" placeholder="<?php echo $config['search_placehold'];?>"><br/>
			<label for="no_items_msg">Empty basket message:</label><input type="text" id="no_items_msg" name="no_items_msg" placeholder="<?php echo $config['no_items_msg'];?>"><br/>
			<label for="items_per_page">Products per page:</label><input type="text" id="items_per_page" name="items_per_page" placeholder="<?php echo $config['items_per_page'];?>"> This will be rounded up based on items per row.<br/><br/>
			<label for="items_per_row">Products per row:</label>
				<select name="items_per_row">
					<option></option>
					<option value="48">2</option>
					<option value="31">3</option>
					<option value="23">4</option>
				</select><br/><br/>

			<label></label><input type="submit" class="button" value="Update settings">

		</form>

		<p class="empty"><a href="#" onclick="resetSettings('site')">SET TO DEFAULT</a></p>
	</div>
		
<?php include("../inc/footer.php");?>