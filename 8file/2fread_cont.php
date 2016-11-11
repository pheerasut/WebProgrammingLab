 <?php
                     $FILE  =  fopen ( "data.txt" , "r" ) ;                
					$text  =  fread ( $FILE , 20 ) ; 
                     print ( "1 read = $text<br>" ) ;
                     $text  =  fread ( $FILE , 10 ) ;  //อ่านข้อความต่ออีก 10 ตัวอักษร
                     print ( "2 read = $text<br>" ) ; // แสดงผลข้อความที่อ่านครั้งใหม่
                     fclose ( $FILE ) ;
?>
