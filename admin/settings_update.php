<?php

	$config = parse_ini_file( "../inc/config.ini" );
	$style_config = parse_ini_file( "../inc/style_config.ini" );
	
	// Check if site settings to be updated

	if (isset($_POST['title'])) {
		
		$title = $_POST['title'];
		$search_placehold = $_POST['search_placehold'];
		$no_items_msg = $_POST['no_items_msg'];
		$items_per_page = $_POST['items_per_page'];

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
	if (!$items_per_page == ""){
		$config['items_per_page'] = $items_per_page;
	}
	else 	{
		$config['items_per_page'] = $config['items_per_page'];
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
	}

	// Check if appearance settings to be updated
	
	elseif (isset($_POST['bgcolor'])) {

		$bgcolor = $_POST['bgcolor'];
		$headcolor = $_POST['headcolor'];
		$bodytextcolor = $_POST['bodytextcolor'];
		$linkcolor = $_POST['linkcolor'];
		$productborder = $_POST['productborder'];

	if (!$bgcolor == ""){
		$style_config['backgroundcolor'] = $bgcolor;
	}
	else 	{
		$style_config['backgroundcolor'] = $style_config['backgroundcolor'];
	}
	if (!$headcolor == ""){
		$style_config['headercolor'] = $headcolor;
	}
	else 	{
		$config['headercolor'] = $style_config['headercolor'];
	}
	if (!$bodytextcolor == ""){
		$style_config['bodytextcolor'] = $bodytextcolor;
	}
	else 	{
		$style_config['bodytextcolor'] = $style_config['bodytextcolor'];
	}
	if (!$linkcolor == ""){
		$style_config['linkcolor'] = $linkcolor;
	}
	else 	{
		$style_config['linkcolor'] = $style_config['linkcolor'];
	}
	if (!$productborder == ""){
		$style_config['productborder'] = $productborder;
	}
	else 	{
		$style_config['productborder'] = $style_config['productborder'];
	}

	$style_open = fopen( "../inc/style_config.ini", "w" );

	echo "<p class='feedback_yes'>Site settings updated</p><ul>";

	foreach ( $style_config as $name => $value )
	{
    	fwrite( $style_open, "$name = \"$value\"\n" );
    	echo "<li>New value: '".$value."'</li>";
	}

	echo "<p><a href='settings_appearance.php'>Modify settings</a>";

	fclose( $style_open );
	}


?>