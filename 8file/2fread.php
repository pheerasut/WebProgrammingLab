<?php
                     $FILE = fopen ( "data.txt" , "r" ) ;  // เปิดแฟ้ม data.txt เพื่ออ่านเพียงอย่างเดียว
                     $text  =  fread ( $FILE , 20 ) ;  // ตัวแปร text  คือค่าจากการอ่านตัวแปร FILE  จำนวน 20 อักษร
                     print ( "$text<br>") ; // แสดงผลข้อความที่อ่าน
                     fclose ( $FILE) ; // ปิดตัวแปร FILE
?>
