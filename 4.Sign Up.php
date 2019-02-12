<?php 
	require_once '4.Sign Up Validation.php'; 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" type="text/css" href="4.Sign Up.css">
</head>
<body>
	<?php 
		$mysqli = new mysqli('localhost', 'root', '', 'word') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM login") or die($mysqli->error);

 	?>
 	<div data-aos="fade-up" data-aos-duration="700">
 		<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<h1>SIGN UP</h1>
				<form action="4.Sign Up Validation.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
					<i class="fas fa-user"></i>
				</div>

				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
					<i class="fas fa-envelope"></i>
				</div>
					
				<div class="form-group">
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
					<i class="fas fa-key"></i>
				</div>	

				<button type="submit" name="register" class="btn btn-outline-primary btn-block"><i class="fas fa-user-plus"></i> SIGN UP</button>

				<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN UP WITH GOOGLE</button>
				<div class="form-group">
				<span>Already a member? </span><a href="#">Login</a>
				</form>
				
			</div>
			</div>
			
		</div>
			
	</div>
 	</div>
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

</body>
</html>