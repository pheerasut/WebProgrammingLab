<?php
//call by reference program in php
function abc1(&$x)
{
$x=$x-10;
echo $x,"<br>";
return($x);
}
$a=50;
echo abc1($a)."<br>";
echo ($a);
?>
<br>---------------<br>
<?php
//Call by value program
function abc2($x)
{
$x=$x-10;
echo $x,"<br>";
return($x);
}
$a=20;
echo abc2($a)."<br>";
echo ($a);
?>