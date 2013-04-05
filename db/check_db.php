<?php

	$dbc = mysqli_connect('localhost', 'root', 'root')
		or die ("Cannot connect to database");

	// Check if database exists
	$db = mysqli_select_db($dbc, 'shopping');
	if (!$db){

		// Create database
		$query = "CREATE DATABASE shopping";
		mysqli_query($dbc, $query);

		$dbc = mysqli_connect('localhost', 'root', 'root', 'shopping');

		// Create products table and data
		$query = 'CREATE TABLE products ( 
				product_id int not null auto_increment PRIMARY KEY,
				category varchar(100),
				product_name varchar(100), 
				description varchar(200), 
				photo_url varchar(100), 
				price decimal(8,2), 
				stock_level decimal(3,0));';
		mysqli_query($dbc, $query)
			or die("Can't create table");
		$query = file_get_contents("db/sample_products.txt");
		mysqli_query ($dbc, $query);

		// Create orders and order contents tables and data

		$query = 'CREATE TABLE customers (
				cust_id int unsigned not null auto_increment PRIMARY KEY,
				cust_fname varchar(50),
				cust_lname varchar(50),
				cust_email varchar(100),
				house_no int unsigned,
				house_pcode varchar(9)
				);';
		mysqli_query($dbc, $query)
			or die("Can't create table");
		$query = file_get_contents("db/sample_customers.txt");
		mysqli_query ($dbc, $query);

		$query = 'CREATE TABLE orders (
				order_id int unsigned not null auto_increment PRIMARY KEY,
				cust_id int unsigned not null,
				order_total DECIMAL (8, 2) not null,
				order_date DATETIME not null,
				foreign key (cust_id) references customers(cust_id)
				);';
		mysqli_query($dbc, $query)
			or die("Can't create table");
		$query = file_get_contents("db/sample_orders.txt");
		mysqli_query ($dbc, $query);

		$query = 'CREATE TABLE order_contents (
				content_id int unsigned not null auto_increment PRIMARY KEY,
				order_id int unsigned not null,
				product_id int unsigned not null,
				quantity int unsigned not null default 1,
				product_price DECIMAL (8, 2) not null,
				foreign key (order_id) references orders(order_id)
				);';
		mysqli_query($dbc, $query)
			or die("Can't create table");
		$query = file_get_contents("db/sample_order_contents.txt");
		mysqli_query ($dbc, $query);

	}
	
?>