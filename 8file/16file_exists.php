<?php
    $f = "data.txt" ;
    if ( file_exists( $f ) ) {
        print("File found  $f" ) ;
        }else{
        print( "File not found  $f" ) ;
        }
?>
