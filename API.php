<html>
<head>
</head>
<form action="API.php" method="post">
<body> 
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