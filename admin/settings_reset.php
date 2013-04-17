<?php

	$config = parse_ini_file( "../inc/config.ini" );

	$config['title'] = "Shoppr";
	$config['search_placehold'] = "Search products"; 
	$config['no_items_msg'] = "Your basket is empty";

	$open = fopen( "../inc/config.ini", "w" );

	echo "<p class='feedback_yes'>Site settings have been reset.</p><ul>";

	foreach ( $config as $name => $value )
	{
    	fwrite( $open, "$name = \"$value\"\n" );
    	echo "<li>Default value: '".$value."'</li>";
	}

	echo "<p><a href='settings_site.php'>Modify settings</a>";

	fclose( $open );

?>