<?php

	if (mysqli_connect('localhost', 'root', 'root', 'shopping')){
		//connected
	}
	else {
		header("Location: db/create_db.php");
	}
?>