<?php
$a = 10;
$b = 20;
function getMin ( ) {
global $a, $b;
if ($a < $b)
return $a;
else
return $b;
}
function getMin2 () {
if ($GLOBALS['a'] < $GLOBALS['b'])
return $GLOBALS['a'];
else
return $GLOBALS['b'];
}
echo getMin()."<BR>\n";
echo getMin2()."<BR>\n";
?>