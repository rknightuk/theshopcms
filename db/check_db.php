<?php

	$dbc = mysqli_connect('localhost', 'root', 'root')
		or die ("Cannot connect to database");

	$db = mysqli_select_db($dbc, 'shopping');
	if (!$db){
		$query = "CREATE DATABASE shopping";
		mysqli_query($dbc, $query);

		$dbc = mysqli_connect('localhost', 'root', 'root', 'shopping');
		
		$query = 'CREATE TABLE products ( 
				product_id int not null auto_increment PRIMARY KEY,
				category varchar(100),
				product_name varchar(100), 
				description varchar(200), 
				photo_url varchar(100), 
				price decimal(4,2), 
				stock_level decimal(3,0));';
		mysqli_query($dbc, $query)
			or die("<br/>Can't create table");

		$query = file_get_contents("db/sample_data.txt");
		mysqli_query ($dbc, $query);
	}
	
?>