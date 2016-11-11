<?php
    $FILE = fopen( "data.txt" , "r" ) ;
    $char = fgetc( $FILE ) ;
    print ("ตัวอักษรที่อ่านคือ => $char") ;
    fclose ( $FILE ) ;
?>
<?/*

                     $FILE = fopen( “data.txt” , “r” ) ;
                     while ( !feof($FILE) ) {
                                $char = fgetc( $FILE ) ;
                                print( “$char” ) ;
                     }
                     fclose( $FILE ) ;
                

*/
?>