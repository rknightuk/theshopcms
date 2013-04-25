<?php
	
	$theme = $_GET['theme'];
	$style_config = parse_ini_file( "../inc/style_config.ini" );

	if ($theme == "darkness"){
		$style_config['bodytextcolor'] = "000000";
		$style_config['headercolor'] = "FF1F1F";
		$style_config['linkcolor'] = "FF030B";
		$style_config['productborder'] = "FF030B";
		$style_config['backgroundcolor'] = "9EA8AB";
	}
	elseif ($theme == "fluffy") {
		
		$style_config['backgroundcolor'] = "FFFFFF";
		$style_config['bodytextcolor'] = "BC10C2";
		$style_config['headercolor'] = "FF26E9";
		$style_config['linkcolor'] = "FF59F9";
		$style_config['productborder'] = "BC10C2";
	}
	elseif ($theme == "hotdog") {
		
		$style_config['backgroundcolor'] = "FFE600";
		$style_config['bodytextcolor'] = "000000";
		$style_config['headercolor'] = "FFFFFF";
		$style_config['linkcolor'] = "FF0000";
		$style_config['productborder'] = "FF0000";
	}

	$style_open = fopen( "../inc/style_config.ini", "w" );

	echo "<p class='feedback_yes'>Theme changes to ".$theme."</p><ul>";

	foreach ( $style_config as $name => $value )
	{
    	fwrite( $style_open, "$name = \"$value\"\n" );
	}

	echo "<p><a href='settings_appearance.php'>Modify settings</a>";

	fclose( $style_open );

?>