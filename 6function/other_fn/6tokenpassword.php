<?php
function randomToken($len) {
srand( date("s") );
$chars =
"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$chars.= "1234567890!@#$%^&*()";
$ret_str = "";
$num = strlen($chars);
for($i=0; $i < $len; $i++) {
 $ret_str.= $chars[rand()%$num];
}
return $ret_str;
}
echo randomToken(13)," ";
?>