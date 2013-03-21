<?php

include("db/connect_db.php");
				
$query = "DROP DATABASE `shopping`;";
$result = mysqli_query($dbc, $query);



echo "<h1>You deleted the DB, dickhead. I can't believe you did that. Now we're fucked.</h1>

<h1>SAD FACE</h1>
<img src='http://cyberbrethren.com/wp-content/uploads/2012/10/sad_kitten.jpg'/><br/><br/>

<h1>JUST KIDDING! You can just <a href='/'>make the database again</a></h1>

<img src='http://littleguurrl.files.wordpress.com/2012/04/kitten-pictures-48.jpeg'/>";

?>