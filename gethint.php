<?php
$q=$_REQUEST["q"];
$hint="";
if($q!==""){
	if($hint===""){
		$hint=$q;}
}
	echo $hint===""?"":$hint;
?>