<? php include('4.Sign Up Validation.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thesaurus Online Learning Tools</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<style>
		body {
			font-family: "Roboto", sans-serif;
			background-size: cover;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="5.style.css">
</head>
<body>
	

	<!-- bg-primary, bg-success, bg-warning, bg-info and bg-danger -->
	<nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">
		<div class="container">

			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="collapse_target">
			<a class="navbar-brand" href="1.Thesaurus Online Learning Tool.php">
	    		<i class="fas fa-book"> Thesaurus Learning</i>
	    	</a>
	    	<ul class="navbar-nav mr-auto">
    			<li class="nav-item">
    				<a class="nav-link" href="#">Link 1</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="#">Quiz</a>
    			</li>
    		</ul>
    		<ul class="navbar-nav ml-auto">
    			<li class="nav-item">
    				<a class="nav-link" href="2.Sign In.php"><i class="fas fa-user"></i> Sign In</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="3.Sign Up.php"><i class="fas fa-user-plus"></i> Sign Up</a>
    			</li>
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
	 
	
	<?php 
		$mysqli = new mysqli('localhost', 'root', '', 'word') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
		// pre_r($result);
		?>

		<div class="row justify-content-center">
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
							<a href="1.Thesaurus Online Learning Tool.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
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
	</div>
	</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>