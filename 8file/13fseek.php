<?php
                                $FILE = fopen( "data.txt" , "r" ) ;
                                fseek( $FILE , 101 ) ;
                                $text = fgets( $FILE , 50 ) ;
                                print "Message is : <u>$text<u>" ;
                                fclose( $FILE ) ;
?>
