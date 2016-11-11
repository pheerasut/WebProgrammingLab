<?php
	$a=0;
    $FILE = fopen( "data.txt" , "r" ) ;
    while ( !feof ($FILE) ){
    $char = fgetc ( $FILE ) ;
    print( "$char" ) ;
    if ( $char == "a") {
        $a++;
    }
    }
    fclose ( $FILE ) ;
    print "<br> $a " ;
?>
