<?php
	$DB = mysqli_connect('localhost','user','password','hellodb');

	$query = "select value
		from integers
		where word = 'five'";

	$result = $DB->query($query);
	$result = $result->fetch_assoc();

	echo 'running';	

?>
