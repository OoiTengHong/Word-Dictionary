<?php 
	session_start();

	$mysqli = new mysqli('localhost', 'root', '', 'word') or die(mysqli_error($mysqli));

	$sql = "SElECT * FROM data";

	$records = mysql_query($sql);

	
 ?>