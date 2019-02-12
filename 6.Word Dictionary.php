<?php 

	session_start();
	

	include('4.Sign Up Validation.php');
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thesaurus Online Learning Tools</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/Footer-Dark.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" type="text/css" href="1.style.css">
	<link rel="stylesheet" href="assets/css/Footer-Dark.css">



	<style>
		body {
			font-family: "Roboto", sans-serif;
			background-size: cover;
			background: #F7971E;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #FFD200, #F7971E);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #FFD200, #F7971E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
		#search {
			margin-top: 50px;
		}
		.table {
			margin-top: 50px;
		}
	</style>
	
</head>
<body>
	

	 <nav class="navbar navbar-light navbar-expand-md fixed-top bg-light" data-aos="fade-up" data-aos-duration="700">
        <div class="container container-fluid"><a class="navbar-brand text-uppercase" href="#" data-bs-hover-animate="bounce"><strong><i class="fas fa-book-reader"></i> Learning Tools</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation">
                    	<a class="nav-link text-uppercase active" href="1.Home Page.php"><i class="fas fa-home"></i> Home</a>
                    </li>

                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="6.Word Dictionary.php">
                    	<i class="fas fa-book"></i> Thesaurus</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Quiz1.php">
                    	<i class="fas fa-question-circle"></i> Thesaurus Quiz</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Translate.php">
                    	<i class="fas fa-language"></i> Google Translate</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="11.Color Game.php">
                    	<i class="fas fa-palette"></i> Color Game</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="2.Sign In.php"><i class="fas fa-user"></i> LOG IN</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="4.Sign Up.php"><i class="fas fa-user-plus"></i> SIGN UP</a></li>
                </ul>
        </div>
        </div>
    </nav>
	
	
	<div class="container">
	<?php require_once '5.process.php'; ?>
	
	<?php if (isset($_SESSION['message'])): ?> 
		<div class="alert alert-<?=$_SESSION['msg_type']?>">
				
				<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				 ?>
		</div>
	<?php endif ?>

	 <form action="API.php" method="POST" id="search">
			<div class="form-group">
				<label>Enter the WORD: </label>
				<input type="text" name="word" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" name="search" class="btn btn-info">Search</button>
			</div>
			<br>
	</form>
	<div class="">
	<form action="5.process.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<b>Please register a new word here:</b>
		</div>

		<div class="form-group">
			<label>Word: </label>
			<input type="text" name="word" value="<?php echo $word ?>" placeholder="Enter new word" class="form-control" id="word">
		</div>

		<div class="form-group">
			<label>Antonym: </label>
			<input type="text" name="antonym" value="<?php echo $antonym ?>" placeholder="Enter antonym" class="form-control" id="antonym">
		</div>

		<div class="form-group">
			<label>Synonym: </label>
			<input type="text" name="synonym" value="<?php echo $synonym ?>" placeholder="Enter synonym" class="form-control" id="synonym">
		</div>

		<div class="form-group">
			<label>Definition: </label>
			<input type="text" name="definition" value="<?php echo $definition ?>" placeholder="Enter definition" class="form-control" id="definition">
		</div>
		<div class="form-group">
		<?php 
			if ($update == true): 
		 ?>
		 	<button type="submit" class="btn btn-info" name="update">Update</button>
		 <?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
		<?php endif; ?>
		</div>	
			

		
	</form>
	
	<?php 
		$mysqli = new mysqli('localhost', 'root', '', 'word') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
		// pre_r($result);
		?>

		<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="700">
			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Word</th>
						<th>Antonym</th>
						<th>Synonym</th>
						<th>Definition</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>

				<?php while ($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['word'] ?></td>
						<td><?php echo $row['antonym'] ?></td>
						<td><?php echo $row['synonym'] ?></td>
						<td><?php echo $row['definition'] ?></td>
						<td>
							<a href="6.Word Dictionary.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
							<a href="5.process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</table>
		</div>

		<?php
		function pre_r($array)
		{
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	 ?>
	

	</div>
	</div>
	</div>

	<div data-aos="fade-up" data-aos-duration="700" class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Develope by Ooi, Fong, Chin and Ho © 2019</p>
            </div>
        </footer>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
</html>