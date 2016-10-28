<?php
function randStr($len) {
srand ( date("s") );
for ($i=0; $i < $len; $i++) {
 $ret_str .= chr( (rand() % 26)+97 );
}
return $ret_str;
}
echo randStr(40);
?>