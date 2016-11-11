<?php
    $f = "data.txt";
    if( file_exists( $f ) )
    {
        print("File found $f<br>") ;
        $size=filesize($f) ;
        echo " Size of file = " , $size , " bytes" ;
    }
?>
