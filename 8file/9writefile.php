<?php
    $FILE = fopen ( "write.txt" , "w" ) ;
    fputs ( $FILE , "My name is  chalerm." ) ;
    echo "เขียนแฟ้มข้อมูลแล้ว" ;
    fclose( $FILE ) ;
?>
