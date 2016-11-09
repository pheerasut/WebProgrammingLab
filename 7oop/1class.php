<?php
class myFirstClass
{
      public $say = "Goodbye World!";
      public function getGreeting(){
           return "Hello World!";
      }
}
$result = new myFirstClass(); 
echo "ผลลัพธ์จาก เมธอด คือ ".$result->getGreeting(); 
echo "<br>";
echo "ผลลัพธ์จาก พร็อบเพอร์ตี้ คือ ".$result->say;
?>
