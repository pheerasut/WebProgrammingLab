<form>
<input type="text" name="txt_country">
<input type="submit" name="submit" value="send">
</form>

<?php
if(isset($_GET['txt_country'])){
$countries = array (
"thailand" => array ( "zone" => "Asia", "D_NAME" => ".th"),
"malasia" => array ( "zone" => "Asia", "D_NAME" => ".my"),
"india" => array ( "zone" => "Asia", "D_NAME" => ".in"),
"holland" => array ( "zone" => "Europe", "D_NAME" => ".nl"),
"france" => array ( "zone" => "Europe", "D_NAME" => ".fr")
);
if(isset($countries[$_GET['txt_country']]["D_NAME"])){
echo "domain name=".$countries[$_GET['txt_country']]["D_NAME"]."<BR>\n";
}
}
?>