<?php
function minmax (&$a,&$b) {
if ($a > $b) {
 $t=$a; $a=$b; $b=$t;
}
}
$x=10;
$y=3;
echo "x=",$x,",y=",$y,"<BR>\n";
minmax($x,$y);
echo "x=",$x,",y=",$y,"<BR>\n";
?>