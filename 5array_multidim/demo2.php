array1<br>
<?php
$color_table["red"] = 0xff0000;
$color_table["green"] = 0x00ff00;
$color_table["blue"] = 0x0000ff;
$color_name= "red";
echo "value = ".$color_table[$color_name]."<BR>\n";
?>
<br>array2<br>
<?php
$color_table = array(
 "red" => 0xff0000,
 "green" => 0x00ff00,
 "blue" => 0x0000ff
);
$color_name= "red";
echo "value = ".$color_table[$color_name]."<BR>\n";
?>