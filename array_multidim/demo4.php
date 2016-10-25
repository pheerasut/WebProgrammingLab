<?php
//each list
unset($a);
$a = array( "a" => 10, "b" => 20, "c" => 30 );
while (list($key,$value) = each($a)) {
echo "$key=$value <BR>\n";
}
?>