<?php
$myarray[0] = 1;
echo "number of elements =".count($myarray)."<BR>\n";
$myarray[1] = "abc";
echo "number of elements =".count($myarray)."<BR>\n";
$myarray[2] = 1.3;
echo "number of elements =".count($myarray)."<BR>\n";
$myarray[]= 13+10; // the same as $myarray[3]= 13+10;
echo "number of elements =".count($myarray)."<BR>\n";
for ($i=0; $i < 4; $i++) {
 echo $myarray[$i]," \n";
}
?>