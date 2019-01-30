<?php 

		$error = '';
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$password = md5($password);
			$conn = mysqli_connect('localhost', 'root', '');
			$db = mysqli_select_db($conn, 'word');
			$query = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email' AND password = '$password'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				header("Location: 1.Login HomePage.php");
			}
			else
			{
				$error = "Email or Password Invalid";

			}
			mysqli_close($conn);
		}
?>