<?php

$name=$_GET["txt_name"];
$surname=$_GET["txt_surname"];
$tel=$_GET["txt_tel"];
$age=intval($_GET['txt_age']);
//echo gettype($age);
if(is_string($name) && $name!=""){
	echo "name:". $name,"<br>";
} else {
	echo "Invalid date","<br>";
}
if(is_string($surname)&& $surname!=""){
	echo "surname:". $surname,"<br>";
}else {
	echo "Invalid date","<br>";
}
if(is_string($tel)&& $tel!=""){
	echo "Telephone:". $tel,"<br>";
}else{
	echo "Invalid date","<br>";
}
if(is_int($age) && $age!=""){
	echo "Age:". $age;
}else{
	echo "Invalid date","<br>";
}

?>