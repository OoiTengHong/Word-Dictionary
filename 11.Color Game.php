<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Color Game</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" href="11.Color Game.css">
	<style type="text/css">
		h1{
			margin-top: 50px;
		}
		.class {
			margin-top: 500px;
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
	
	<h1>
		The
		<br>
		<span id="colorDisplay">RGB</span> 
		<br>
		Color Guessing Game
	</h1>

	<div id="stripe">
		<button id="reset">New Colors</button>
		<span id="message"></span>
		<button class="mode" ">Easy</button>
		<button class="mode selected">Hard</button>
	</div>

	<div id="container">
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
	</div>

	
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
	<script type="text/javascript" src="11.Color Game.js"></script>
</body>
</html>