<?php
                     $FILE  =  fopen  ( "data.txt" , "r" ) ;
                     echo "อ่านข้อความครั้งละ 20 ตัวอักษร <p>" ;
                     while ( !feof ($FILE) ) // ขณะใดที่ยังไม่ถึงจุดสิ้นสุดของแฟ้มข้อมูล 
                     {
                                $text = fread ( $FILE , 20 ) ;
                                print ("ข้อความ = $text<br>") ;
                     }
                     fclose ( $FILE ) ; 
 ?>
 <?php
                      $FILE  =  fopen  ( "data.txt" , "r" ) ;
                     echo "อ่านข้อความครั้งละ 20 ตัวอักษร <p>" ;
                     while ( !feof ($FILE) ) // ขณะใดที่ยังไม่ถึงจุดสิ้นสุดของแฟ้มข้อมูล 
                     {
                                $text = fread ( $FILE , 20 ) ;
                                print ("$text") ;
                     }
                     fclose ( $FILE ) ; 
 ?>
