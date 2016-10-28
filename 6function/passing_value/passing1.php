<?php
//call by reference
/*The called function uses the value stored in the passed address;
 any changes to it do affect the source variable.*/
function swap(&$a, &$b) {
$t = $a;
$a = $b;
echo "\$a = ".$a."<br>\n";
$b = $t;
echo "\$b = ".$b."<br>\n";
}
$x=10;
$y=3;
echo "x=",$x,",y=",$y,"<br>\n";
swap($x,$y);
echo "x=",$x,",y=",$y,"<br>\n";
?>
-----------------------------------<br>
<?php
//call by value
/*The called function uses the value in a local variable;
 any changes to it do not affect the source variable.*/
function swap2($a, $b) {
$t = $a;
$a = $b;
echo "\$a = ".$a."<br>\n";
$b = $t;
echo "\$b = ".$b."<br>\n";
}
$x=10;
$y=3;
echo "x=",$x,",y=",$y,"<br>\n";
swap2($x,$y);
echo "x=",$x,",y=",$y,"<br>\n";
?>
