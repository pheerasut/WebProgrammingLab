<?php
//อ่านชนิดตัวแปร
echo gettype(0),"<br>";
echo gettype(1.1),"<br>";
echo gettype(""),"<br>";
echo gettype((1==1)),"<br>";
$var="abc";
if ( gettype($var)=="string" ) {
echo "this is a string<br>";
}
?>