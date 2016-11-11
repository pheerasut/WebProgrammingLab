<?php
                $FILE  =  fopen  ( "data.txt" , "r" ) ; // ตัวแปร FILE คือการเปิดแฟ้ม data.txt
                if (! $FILE) {   // หากไม่พบตัวแปร FILE
                   echo "<h1> File not found.< / h1>";
                }else{
                   print ( "File found") ;   //หากพบตัวแปร FILE
                 fclose ($FILE) ;  // ใช้งานตัวแปร FILE แล้วต้องปิดด้วย
                }
?>
