<?php
include ("Class_lib.php");
$stefan = new person();//step 8
$jimmy = new person();  
$stefan->set_name("Stefan Mischook");  //step 10
$jimmy->set_name("Jimmy Waddles");  
echo "Stefan's full name: " . $stefan->get_name(); //step 11 
echo "<br>";
echo "Nick's full name: " . $jimmy->get_name();
 // การเข้าถึงค่า property โดยตรงของ class ซึ่งไม่ควรทำ    
echo "<br>";
echo "การเข้าถึงค่า property โดยตรงของ class ซึ่งไม่ควรทำ "; //step 12
echo "<br>";
echo "Stefan's full name: ".$stefan->name;
echo "<br>";
$stefan = new person("Stefan test");//step 14
echo "Stefan's full name: ".$stefan->get_name();
echo "Tell me private stuff: ".$stefan->pinn_number;//step 17

?>