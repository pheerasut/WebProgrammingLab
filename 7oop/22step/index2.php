<?php
include ("Class_lib.php");
$stefan = new person("Stefan test");//step 14
echo "Stefan's full name: ".$stefan->get_name();
echo "Tell me private stuff: ".$stefan->pinn_number;//step 16
$james = new employee("Johnny Fingers");
echo "<br>";
echo "---> " . $james->get_name();
?>