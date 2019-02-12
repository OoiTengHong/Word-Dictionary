<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
	Antonym Quiz
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
			position:relative;
			left: 200px;
			font-family: 'Lobster', cursive;
			font-weight: bold;
			margin-top: 100px;
	}
            
    #dropzone {
                position:relative;
				top: 1px;
				left: 200px;
				z-index: -1;
                width: 200px;
                height: 110px;
                background: white;
                border: solid 1px;				
            }
			
	#dropzone2 {
                position:relative;
				top: 1px;
				left: 200px;
				z-index: -1;
                width: 200px;
                height: 110px;
                background: white;
                border: solid 1px;	
            }
			
	#dropzone3 {
                position:relative;
				top: 1px;
				left: 200px;
				z-index: -1;
                width: 200px;
                height: 110px;
                background: white;
                border: solid 1px;	
            }
			
	#align{
			float: left;
			color: white;
			font-family: 'Bitter', serif;
			font-size: 30px;
			margin: auto;
	}
	
	#align2{
			float: left;
			width:50%;
			padding:auto;
			padding-left: 10em;
	}
	
	#ans{
			text-align: center;
			color: white;
			width: 65%;
			margin: auto;
	}

	.winston{
			display:block;
			font-size:1.6em;
			font-weight:bold;
			color:white;
			padding:4px;
			background-color:#031fc6;
			border:2px solid #02168c;
			width:50%;
			cursor:pointer;
			text-align:center;
		}
	
	#pans{
		width: 20%;
		float:left;
	}
	
	hr{
		border: 1px solid white;
		width: 85%;
	}
	.footer-dark {
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

	<div id="font">Antonym Quiz Time !!!</div>
	<hr>
	
	<div id="ans">Note: There will be three answers for you to choose from. Drag the correct answer into the white box given. If the answer is correct, the box will turn green. Otherwise, the box will remain white.</div>
	<br>
	<div id="align2">
	
    <div id="align">1. Brave</div>
	
    <div id="dropzone"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<br>
	<br>
	<div id="align">2. Marvelous</div>
	<div id="dropzone2"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<br>
	<br>
	<div id="align">3. Truth</div>
	<div id="dropzone3"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	</div>
	
	<div id="pans">
	<p data-ans="Happy" class="winston" id="happy">Terrible</p>
	<p data-ans="Sad" class="winston" id="sad">Cowardly</p>
	<p data-ans="Boring" class="winston" id="boring">Propaganda</p>
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

	<script>
		$("#sad").draggable();
		$("#dropzone").droppable(
		{
			accept: "#sad", zIndex: 2,
			drop: function(event,ui)
			{
				$(this).css('background','green');
			},
			over: function(event, ui) 
			{
				$(this).css('background', 'orange');
			},
			out: function(event, ui) 
			{
				$(this).css('background', 'white');
			}
		});
	</script>
	<script>
		$("#happy").draggable();
		$("#dropzone2").droppable(
		{
			accept: "#happy", zIndex: 2,
			drop: function(event,ui)
			{
				$(this).css('background','green');
			},
			over: function(event, ui) 
			{
				$(this).css('background', 'orange');
			},
			out: function(event, ui) 
			{
				$(this).css('background', 'white');
			}
		});
	</script>
	<script>
		$("#boring").draggable();
		$("#dropzone3").droppable(
		{
			accept: "#boring", zIndex: 2,
			drop: function(event,ui)
			{
				$(this).css('background','green');
			},
			over: function(event, ui) 
			{
				$(this).css('background', 'orange');
			},
			out: function(event, ui) 
			{
				$(this).css('background', 'white');
			}
		});
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
</html>