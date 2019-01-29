<?php 
	include("3.Sign In Validation.php"); 
	require_once "config.php";

	$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Sign In.css">
</head>
<body>
	
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<h1 id="h1">SIGN IN</h1>
				<form method="POST">
					<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
					<i class="fas fa-envelope"></i>
				</div>
					
				<div class="form-group">
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
					<i class="fas fa-key"></i>
				</div>	

				<button type="submit" name="submit" class="btn btn-outline-primary btn-block"><i class="fas fa-sign-in-alt"></i> SIGN IN</button>

				<div class="col-12 forgot ">
					<a href="#">Forgot Password?</a>
				</div>	
				<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>
				<div class="form-group">
				<span>Not a member yet? </span><a href="4.Sign Up.php">Get an ID</a>
				</form>
				<span><?php echo $error; ?></span>
			</div>
			</div>
			
		</div>
			
	</div>
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	
</body>
</html>