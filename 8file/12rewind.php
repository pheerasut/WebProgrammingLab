<?php
                                $FILE = fopen( "data.txt" , "r" ) ;                                   
                                $text = fgets( $FILE , 69) ;
                                print "Message is : $text<br>" ;                       
                                rewind( $FILE ) ;
                                $text = fgets( $FILE , 69 ) ;
                                print "New Message is : $text<br>" ;
                                fclose( $FILE) ;
?>
