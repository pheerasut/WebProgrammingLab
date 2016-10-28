<?php
// create selection list from a given string
function str2select($str, $delim) {
$options = explode($delim,$str);
$num = count($options);
for( $i=0; $i < $num;$i++) {
 echo "<option> $options[$i]</option>\n";
}
}
$select_str="10 บาท|20 บาท|30 บาท|40 บาท|50 บาท|100 บาท|200 บาท|500
บาท|1000 บาท";
?>
<FORM>
<SELECT NAME="testform">
<?php str2select($select_str,"|"); ?>
</SELECT>
</FORM>