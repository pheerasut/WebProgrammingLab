<?php
$x = ((double)"100.1") + 0.3e+3;
echo $x," <BR>";
echo ($x=(int)$x)," <BR>";
$x = "P".$x;
echo $x," <BR>";
$x= ceil(13.45); /* get integer part */
echo $x."<BR>";
if (!settype( $x, "integer") ) {
echo "error <BR>";
}
echo $x." $x%5=".($x%5)."<BR>";
?>