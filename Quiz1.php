<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
	Quiz
</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Lobster" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="1.style.css">
<style>
    body{
			background-color: black;
	}
	
	#font{
			color: white;
			font-size: 50px;
			text-align: center;
			font-family: 'Lobster', cursive;
			font-weight: bold;
	}
			
	#ans{
			text-align: center;
			color: white;
			width: 65%;
			margin: auto;
	}
	
	hr{
		border: 1px solid white;
		width: 85%;
	}
	
	.button{
		display: inline-block;
		margin-top: 2em;
		padding: 0.8em 2em;
		background: white;
		line-height: 1.8em;
		letter-spacing: 1px;
		text-decoration: none;
		font-size: 1em;
		color: black;
	}
	
	.button:before{
		display: inline-block;
		background: blue;
		margin-right: 1em;
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 20px;
		text-align: center;
		color: #272925;
	}
	
	#portfolio .box{
		text-align: center;
	}
	
	.column2,
	.column3{
		width: 282px;
	}
	
	.column2{
		float: left;
		margin-right: 24px;
	}
	
	.column3{
		float: right;
		margin-right: 24px;
	}
	
	h3,p{
		color: white;
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
	        <a class="nav-link" href="Quiz.php"><i class="far fa-question-circle"></i> Quiz</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="6.Word Dictionary.php"><i class="fas fa-language"></i> Google Translate</a>
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
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	</div>

	<br>
	<br>
	<br>
	<br>

	<div id="font">Quiz Page !!!</div>
	<hr>
	
	<div id="quiz" class="wrapper">
	<div id="portfolio" class="container">
		<div class="column2">
			<div class="box"> <a href="QuizA.php"><img src="not-equal.png" style="width:200px;height:200px;" class="image image-full" /></a>
				<h3>Antonyms</h3>
				<p>A word opposite in meaning to another</p>
				<a href="QuizA.php" class="button button-small">Click Me</a> </div>
		</div>
		<div class="column3">
			<div class="box"> <a href="QuizS.php"><img src="equal.png" style="width:200px;height:200px;" class="image image-full" /></a>
				<h3>Synonyms</h3>
				<p>A word that means exactly or nearly the same as another word</p>
				<a href="QiuzS.php" class="button button-small">Click Me</a> </div>
		</div>
	</div>
</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>