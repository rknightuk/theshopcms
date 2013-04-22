<?php

	$source = $_GET['source'];
	
	// If site settings

	if ($source == "site") {
		$config = parse_ini_file( "../inc/config.ini" );

	$config['title'] = "Shoppr";
	$config['search_placehold'] = "Search products"; 
	$config['no_items_msg'] = "Your basket is empty";
	$config['items_per_page'] = "6";
	$config['items_per_row'] = "31";

	$open = fopen( "../inc/config.ini", "w" );

	echo "<p class='feedback_yes'>Site settings have been reset.</p><ul>";

	foreach ( $config as $name => $value )
	{
    	fwrite( $open, "$name = \"$value\"\n" );
    	echo "<li>Default value: '".$value."'</li>";
	}

	echo "<p><a href='settings_site.php'>Modify settings</a>";

	fclose( $open );
	}

	// If appearance settings

	elseif ($source = "appearance"){

	$style_config = parse_ini_file( "../inc/style_config.ini" );

	$style_config['backgroundcolor'] = "fff";
	$style_config['bodytextcolor'] = "000";
	$style_config['headercolor'] = "000";
	$style_config['linkcolor'] = "FF532C";
	$style_config['productborder'] = "dbdbdb";

	$style_open = fopen( "../inc/style_config.ini", "w" );

	echo "<p class='feedback_yes'>Appearance settings have been reset.</p><ul>";

	foreach ( $style_config as $name => $value )
	{
    	fwrite( $style_open, "$name = \"$value\"\n" );
    	echo "<li>Default value: '".$value."'</li>";
	}

	echo "<p><a href='settings_appearance.php'>Modify settings</a>";

	fclose( $style_open );

	}

?>