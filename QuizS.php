<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
	Synonyms Quiz
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
			position:relative;
			left: 200px;
			font-family: 'Lobster', cursive;
			font-weight: bold;
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

	p{
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
	        <a class="nav-link" href="Quiz1.php"><i class="far fa-question-circle"></i> Quiz</a>
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

	<div id="font">Synonyms Quiz Time !!!</div>
	<hr>
	
	<div id="ans">Note: There will be three answers for you to choose from. Drag the correct answer into the white box given. If the answer is correct, the box will turn green. Otherwise, the box will remain white.</div>
	<br>
	<div id="align2">
	
    <div id="align">1. Scary</div>
	
    <div id="dropzone"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<br>
	<br>
	<div id="align">2. Portent</div>
	<div id="dropzone2"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<br>
	<br>
	<div id="align">3. Great</div>
	<div id="dropzone3"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	</div>
	
	<div id="pans">
	<p data-ans="Happy" class="winston" id="happy">Presage</p>
	<p data-ans="Sad" class="winston" id="sad">Eerie</p>
	<p data-ans="Boring" class="winston" id="boring">Splendid</p>
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
</body>
</html>