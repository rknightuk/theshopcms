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
			$query = 
				"INSERT INTO products (product_name, category, description, photo_url, price, stock_level)
				VALUES (\"USB Cable\", \"Computing\", \"2M USB cable in black\", \"sample_usbcable.png\", 3.99, 112) , 
				(\"Keyboard\", \"Computing\", \"USB Keyboard, UK layout. White and aluminium finish.\", \"sample_keyboard.png\", 7.99, 20), 
				(\"Mouse\", \"Computing\", \"Two button USB mouse with black finish.\", \"sample_mouse.png\", 3.99, 200) , 
				(\"Microphone\", \"Computing\", \"USB Microphone for talking and recording. Yay.\", \"sample_microphone.png\", 12.99, 0), 
				(\"Surround Sound Speakers\", \"Computing\", \"Surround sound speakers in black finish with remote control.\", \"sample_speakers.png\", 19.99, 86), 
				(\"AA Batteries x 4\", \"Computing\", \"4 x AA Batteries, awesome.\", \"sample_batteries.png\", 4.99, 74),
				(\"Bartlett's Familiar Quotations\", \"Books\", \"Contains over 20,00 quotations from over 2,500 authors. 17th edition\", \"sample_quotations.png\", 32.00, 24),
(\"Sketchnote Handbook\", \"Books\", \"An illustrated guide to visual notetaking by Mike Rohde\", \"sample_sketchnote.png\", 14.65, 0),
(\"HTML and CSS\", \"Books\", \"An introduction to HTML and CSS in a visual way\", \"sample_htmlandcss.png\", 7.99, 7),
(\"How to Tell If Your Cat is Plotting to Kill You\", \"Books\", \"Brilliantly whimsical yet oddly informative, TheOatmeal.com is an entertainment site full of comics, quizzes, and stories.\", \"sample_catkill.png\", 7.99, 72),
(\"I Love Charts\", \"Books\", \"The first collection from I Love Charts, the wildly popular humor blog with 600,000 page views a month Charts can be informative, illuminating, humorous, or poignant.\", \"sample_charts.png\", 6.19, 102),
(\"XKCD\", \"Books\", \"This book creates laughs from science jokes on one page to relationship humor on another.\", \"sample_xkcd.png\", 10.80, 1),

(\"BTTF T-Shirt (L)\", \"Clothing\", \"Black Back to The Future t-shirt, Large\", \"sample_bttfshirt.png\", 10.99, 65),
(\"Union Jack Belt Buckle\", \"Clothing\", \"union Jack belt buckle with hand painted detail\", \"sample_ujbelt.png\", 5.99, 0),
(\"Leather Jacket (M)\", \"Clothing\", \"Medium genuine leather jacket with detail stitching.\", \"sample_jacket.png\", 75.00, 120),
(\"Red Converse Size 9\", \"Clothing\", \"Red Chuck Taylor Converse in mens size 9\", \"sample_converse.png\", 34.99, 12),
(\"Men's Black Casio Watch\", \"Clothing\", \"Classic style mens Casio watch, with plastic strap.\", \"sample_casio.png\", 12.75, 9),
(\"Unisex bracelet\", \"Clothing\", \"Silver unisex bracelet with detailing.\", \"sample_bracelet.png\", 29.98, 98)";
			mysql_query($query)
				or die("Can't insert data");
?>

<meta http-equiv="Refresh" content="2;url=/?start">

<h2>No shop data found, please wait whilst sample data is created...</h2>

<img src="/inc/img/progress.gif" alt="Data creation progress wheel"/>
