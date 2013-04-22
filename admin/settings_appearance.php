<?php
$title = " - Admin: Appearance settings";

include("../inc/header_cms.php");
include("../inc/nav_admin.php");?>

<script>

	function resetSettings(source){
  		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
   			 document.getElementById("settings_style").innerHTML=xmlhttp.responseText;
    		}
  		}
		xmlhttp.open("GET","settings_reset.php?source="+source,false);
		xmlhttp.send();
		}

	function changeTheme(theme){
  		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
   			 document.getElementById("settings_style").innerHTML=xmlhttp.responseText;
    		}
  		}
		xmlhttp.open("GET","changetheme.php?theme="+theme,false);
		xmlhttp.send();
		}

</script>
	
	<h2>Update appearance settings</h2>

	<!-- Color picker provided by jsColor (http://jscolor.com/) -->

	<div id="settings_style">
		<form id="settings_update" onsubmit="return submitForm('settings_update.php', '#settings_update', '#settings_style')">

			<label for="bgcolor">Background colour:</label><input class="color" type="text" maxlength="13" id="bgcolor" name="bgcolor" value="<?php echo $style_config['backgroundcolor'];?>"><br/>
			<label for="headcolor">Header colour:</label><input  class="color" type="text" maxlength="13" id="headcolor" name="headcolor" value="<?php echo $style_config['headercolor'];?>"><br/>
			<label for="bodytextcolor">Body text colour:</label><input  class="color" type="text" maxlength="13" id="bodytextcolor" name="bodytextcolor" value="<?php echo $style_config['bodytextcolor'];?>"><br/>
			<label for="linkcolor">Hyperlink colour:</label><input  class="color" type="text" maxlength="13" id="linkcolor" name="linkcolor" value="<?php echo $style_config['linkcolor'];?>"><br/>
			<label for="productborder">Product border colour:</label><input  class="color" type="text" maxlength="13" id="productborder" name="productborder" value="<?php echo $style_config['productborder'];?>"><br/>
			<label></label><input type="submit" class="button" value="Update settings">

		</form>

		<p class="empty"><a href="#" onclick="resetSettings('appearance')">SET TO DEFAULT</a></p>

		<span class="themes">
		<h2>Built-in Themes</h2>

		<h3>Darkness</h3>

		<img src="../inc/img/theme_darkness.png">

		<button onclick="changeTheme('darkness')">Switch to Darkness theme</button>

		<h3>Fluffy</h3>

		<img src="../inc/img/theme_fluffy.png">

		<button onclick="changeTheme('fluffy')">Switch to Fluffy theme</button>

		<h3>Hot Dog</h3>

		<img src="../inc/img/theme_hotdog.png">

		<button onclick="changeTheme('hotdog')">Switch to Hot Dog theme</button>

	</div>
		
<?php include("../inc/footer.php");?>