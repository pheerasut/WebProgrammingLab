<form>
<input type="text" name="txt_key">
<input type="submit" name="submit" value="send">
</form>
<?php
//search in array
unset($a);
$a[]=1;
$a[]=2;
$a[]=3;
$a[]="red";
$a[]="green";
$a[]="blue";
$a[]="none";
$i=0;
if (isset($_GET["txt_key"])){
$found="not found";
for ($i=0; $i < count($a); $i++) {
if ( is_long($a[$i]) ) { // skip all integer elements
 continue;
}
if ($a[$i] == $_GET["txt_key"]) {
 $found=$a[$i];
 break;
}
}
echo $found,"<BR>\n";
}
?>