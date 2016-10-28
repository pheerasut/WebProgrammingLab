<form>
<input type="text" name="txt_day">
<input type="submit" name="submit" value="send">
</form>
<?php
//switch case
if (isset($_GET["txt_day"])){
$day=$_GET["txt_day"];
switch ($day) {
case 1 :
 echo "Monday<BR>\n";
 break;
case 2 :
 echo "Tuesday<BR>\n";
 break;
case 3 :
 echo "Wednesday<BR>\n";
 break;
case 4 :
 echo "Thurday<BR>\n";
 break;
case 5 :
 echo "Friday<BR>\n";
 break;
case 6:
 echo "Saturday<BR>\n";
 break;
case 7 :
 echo "Sunday<BR>\n";
 break;
default :
 echo "error<BR>\n";
}
}
?>