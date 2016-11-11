<?php
                     $FILE  =  fopen  ( "data.txt" , "r" ) ;
                     echo "อ่านข้อความครั้งละ 20 ตัวอักษร <p>" ;
                     while ( !feof ($FILE) )
                     {
                                $text = fgets ( $FILE , 20 ) ;
                                print ("ข้อความ = $text<br>") ;
                     }
                     fclose ( $FILE ) ;
?>
