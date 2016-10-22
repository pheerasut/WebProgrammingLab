<?php
// alternative of gettype
unset($a);
$a="hello";
if (is_string($a) == true) {
echo "\$a is a string <BR>";
}
unset($a);
$a[]="red";
$a[]="green";
$a[]="blue";
if (is_array($a) == true) {
echo "\$a is an array of size ",count($a),"<BR>";
}
?>