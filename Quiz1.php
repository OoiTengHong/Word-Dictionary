<?php 
	session_start();
	
?>
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
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/Footer-Dark.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" type="text/css" href="1.style.css">
	<link rel="stylesheet" href="assets/css/Footer-Dark.css">
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
			margin-top: 100px;
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
	
	
	#portfolio .box{
		text-align: center;
	}
	
	
	
	h3,p{
		color: white;
	}
	.footer-dark {
		margin-top: 120px;
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
		<div class="row">
			
		</div>
		<div id="font">Quiz Page !!!</div>
			<hr>
			<div id="quiz" class="wrapper">
			<div id="portfolio">
				<div class="row">
					<div class="col-lg-6" data-aos="fade-up" data-aos-duration="700" >
						<div class="box"> <a href="QuizA.php"><img src="not-equal.png" style="width:200px;height:200px;" class="image image-full" /></a>
								<h3>Antonyms</h3>
								<p>A word that expresses a meaning opposed <br>to the meaning of another word</p>
								<a href="QuizA.php" class="btn btn-outline-light btn-lg">Click Me</a> 
						</div>
					</div>
					<div class="col-lg-6" data-aos="fade-up" data-aos-duration="700" >

						<div class="box"> <a href="QuizS.php"><img src="equal.png" style="width:200px;height:200px;" class="image image-full" /></a>
								<h3>Synonyms</h3>
								<p>A word or phrase that means exactly or <br>nearly the same as another word or phrase</p>
								<a href="QuizS.php" class="btn btn-outline-light btn-lg">Click Me</a>
						</div>
					</div>
				</div>
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