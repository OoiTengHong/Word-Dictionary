<?php 
	session_start();

	$mysqli = new mysqli('localhost', 'root', '', 'word') or die(mysqli_error($mysqli));

	$id = 0;
	$username = '';
	$email = '';
	$password = '';

	if (isset($_POST['register'])) {

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// encrypt password before storing in database
		$password = md5($password); 
		$mysqli->query("INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')") or die($mysqli->error);
		 header("location: 1.Home Page.php");
	}

 ?>