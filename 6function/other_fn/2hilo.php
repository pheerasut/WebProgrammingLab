<?
function randInt($low,$high) {
srand ( date("s") );
$range = $high - $low;
$num = (rand() % $range) + $low;
return $num;
}
//...please complete the code
?>