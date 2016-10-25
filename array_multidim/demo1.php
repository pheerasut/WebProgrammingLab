<?php
$dim = 3;
for ($row=0; $row <= $dim; $row++) {
for ($column=0; $column <= $dim; $column++) {
 $myarray2[$row][$column] = 4*$row + $column;
 echo $myarray2[$row][$column]," ";
}
echo "<BR>\n";
}
?>