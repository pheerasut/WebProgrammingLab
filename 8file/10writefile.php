<?php
                                $data = file ( "data.txt" ) ;
                                $FILE = fopen( "read.htm" , "w" ) ;
                                fputs ( $FILE , "<html><body>" ) ;
                                fputs( $FILE , "<font color = blue>" ) ;
                                for ( $i = 0 ; $i<count ($data) ; $i++ ){
                                   fputs( $FILE , $data[$i] . "<br>" ) ; //เชื่อมต้อด้วยเครื่องหมาย .
                                }
                                fputs( $FILE , "</html> </body>" ) ;
                                fclose( $FILE ) ;                  
                                echo "Write file Complete" ;
?>
