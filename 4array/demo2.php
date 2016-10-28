<?php
// create empty array
$a=array();
// define string containing color names separated by | (pipe)
$color_names="red|green|blue";
// create array from string
$a=explode("|",$color_names);
while ( $color=each($a) ) {
echo "$color[1]<BR>\n"; // note: $color[0] contains the index (0,1,2,...)
}
?>