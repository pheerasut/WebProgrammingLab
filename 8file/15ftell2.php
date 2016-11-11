<?php
$FILE = fopen( "data.txt" , "r" ) ;                   
$pos = ftell( $FILE ) ;
print "Pointer Position :    <u>$pos</u><br>" ; // อยู่จุดเริ่มต้น คือ 0                 
$text = fgets( $FILE , 50 ) ;
print "read 50 char<br>" ;
print "Message is : <font color=blue> $text</font><br>"  ;
$pos = ftell ( $FILE ) ;  // $pos เก็บตำแหน่งตัวชี้แฟ้มข้อมูลใหม่
print "New Pointer Position is <u>$pos</u><br>" ; //แสดงผลตำแหน่งตัวชี้แฟ้มข้อมูล 
fclose( $FILE ) ;
?>
