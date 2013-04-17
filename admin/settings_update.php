<?php

	$config = parse_ini_file( "../inc/config.ini" );
	
	$title = $_POST['title'];
	$search_placehold = $_POST['search_placehold'];
	$no_items_msg = $_POST['no_items_msg'];

	if (!$title == ""){
		$config['title'] = $title;
	}
	else 	{
		$config['title'] = $config['title'];
	}
	if (!$search_placehold == ""){
		$config['search_placehold'] = $search_placehold;
	}
	else 	{
		$config['search_placehold'] = $config['search_placehold'];
	}
	if (!$no_items_msg == ""){
		$config['no_items_msg'] = $no_items_msg;
	}
	else 	{
		$config['no_items_msg'] = $config['no_items_msg'];
	}

	$open = fopen( "../inc/config.ini", "w" );

	echo "<p class='feedback_yes'>Site settings updated</p><ul>";

	foreach ( $config as $name => $value )
	{
    	fwrite( $open, "$name = \"$value\"\n" );
    	echo "<li>New value: '".$value."'</li>";
	}

	echo "<p><a href='settings_site.php'>Modify settings</a>";

	fclose( $open );


?>