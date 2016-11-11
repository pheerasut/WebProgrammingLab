<?php
                     $FILE = fopen ( "infotech.php" , "r" ) ; // อ่านแฟ้มข้อมูล html แล้วตัด tag ของภาษา HTML
                     while ( !feof ($FILE) ) {
                                $text = fgetss ( $FILE , 150 ) ;
                                print ( "$text<br>") ;
                     }
                     fclose ( $FILE ) ;
?>
