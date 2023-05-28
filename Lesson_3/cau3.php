<?php
    // in ra bảng cửu chương từ 1 đến 10
    function printCore(){
        for($i=1; $i<=10; $i++){
            for($j=1; $j<=10; $j++){
                echo $i*$j . " ";
            }
            echo("</br>");
        }
            
    }
            //caulenh
            echo "Câu 3: ";
            printCore();
?>