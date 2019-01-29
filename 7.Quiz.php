<? php include('4.Sign Up Validation.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thesaurus Online Learning Tools</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Quiz.css">
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
    <link rel="stylesheet" type="text/css" href="1.style.css">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<style>
		body {
			font-family: "Roboto", sans-serif;
			background-size: cover;
		}
		.droppable.active { 
            background-color: red; 
         }
	</style>
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   	<div class="container">
   	<a class="navbar-brand" href="#">Word Dictionary</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="1.HomePage.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="6.Word Dictionary.php"><i class="fas fa-book"></i> Thesaurus</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="7.Quiz.php"><i class="far fa-question-circle"></i> Quiz</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="Translate.html"><i class="fas fa-language"></i> Google Translate</a>
	      </li>
	    </ul>
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="2.Sign In.php"><i class="fas fa-user"></i> Sign In</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="4.Sign Up.php"><i class="fas fa-user-plus"></i> Sign Up</a>
	      </li>
	    </ul>
	  </div>
   	</div>
	  
	</nav>
	
	<div class="container" id="square">
		<div class="row">
			<div class="col-lg-2">
			<div class="boxed">
				<h3><b>#NO</b></h3>
			</div>
			
			</div>
			<div class="col-lg-2">
				<div class="boxed">
					<h3><b>WORD</b></h3>
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed">
					<h3><b>SYNONYM</b></h3>
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed">
					<h3><b>ANTONYM</b></h3>
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed">
					<h3><b>DEFINITION</b></h3>
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed">
					<h3><b>CHOICE</b></h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-2">
			<div class="boxed added">
				<p>NO</p>
			</div>
			
			</div>
			<div class="col-lg-2">
				<div class="boxed added">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added droppable">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added droppable">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added droppable">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added draggable">
					<p>testing</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-2">
			<div class="boxed added">
				<p>NO</p>
			</div>
			
			</div>
			<div class="col-lg-2">
				<div class="boxed added">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added droppable">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added droppable">
					
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added droppable">
					drop here
				</div>
				
			</div>
			<div class="col-lg-2">
				<div class="boxed added draggable">
					<p>testing</p>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script type="text/javascript" src="7.Quiz.js"></script>
</body>
</html>