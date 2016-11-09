<?php
function binSearch(&$key,&$array, $left, $right)
{
 $mid = ceil( ($left + $right) / 2 );
 if ($left > $right)
 return -1;
 if ($array[$mid] == $key)
 return $mid;
 else if ($key < $array[$mid])
 return binSearch($key, $array, $left, $mid-1); // recursive call
 else
 return binSearch($key, $array, $mid+1, $right); // recursive call
}
$num=100;
$keys = rand(0, $num);
for($i=0; $i < $num; $i++) {
$sorted_array[$i] = $i+1;
}
$keys=13;
echo binSearch($keys, $sorted_array, 0, $num);
?>