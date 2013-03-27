<?php 

mysql_connect('localhost', 'root', 'root');

$query = "CREATE DATABASE shopping";
			mysql_query($query)
				or die("Can't create DB");
			mysql_select_db("shopping")
				or die("Can't select DB");
			$query = 'CREATE TABLE products ( 
				product_id int not null auto_increment PRIMARY KEY,
				category varchar(100),
				product_name varchar(100), 
				description varchar(200), 
				photo_url varchar(100), 
				price decimal(4,2), 
				stock_level decimal(3,0));';
			mysql_query($query)
				or die("Can't create table");
			$query = file_get_contents("sample_data.txt");
			mysql_query($query)
				or die("Can't insert data");
?>

<meta http-equiv="Refresh" content="1;url=/">

<h2>No shop data found, please wait whilst sample data is created...</h2>

<img src="/inc/img/progress.gif" alt="Data creation progress wheel"/>
