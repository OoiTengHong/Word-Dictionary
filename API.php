<html>
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
			background-color: black;
			color: white;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="5.style.css">
</head>
<form action="API.php" method="post">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   	<div class="container">
   	<a class="navbar-brand" href="API.html">Word Dictionary</a>
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
<br>
<br>
<br>
<br>
<br>
<br>
Enter the word: <input type="text" name="word">
<br>
<br>
<input type="submit">
</body>
</form>
</html>
 <?php
 $myword=$_POST["word"];
 function grab_xml_definition ($word, $ref, $key) {
  	
    $uri = "https://www.dictionaryapi.com/api/v1/references/" . urlencode($ref) . "/xml/" . urlencode($word) . "?key=" . urlencode($key);
  
    return file_get_contents($uri);
  };
  echo $myword."<br>";
  $xdef = grab_xml_definition($myword, "collegiate", "c94fea48-7b25-4d41-8132-76b23f0b6c74");
  $xdef2= grab_xml_definition($myword, "thesaurus", "73281c49-cad8-4bd7-9993-ce5370aa999c");  
  $dic= new SimpleXMLElement($xdef);
  $dic2= new SimpleXMLElement($xdef2);
  echo "Definition".$dic->entry[0]->def->dt[0]."<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$dic->entry[0]->def->dt[1]."<br>";
  echo "Synonym   :".$dic2->entry[0]->sens->syn."<br>";
  echo "Antonym   :".$dic2->entry[0]->sens->ant."<br>";
?>