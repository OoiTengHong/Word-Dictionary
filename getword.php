<?php
$q=$_REQUEST["q"];
$word="";
if($q!==""){
	if($word===""){
		$word=$q;}
}
	echo $word===""?"":$word;
?>
