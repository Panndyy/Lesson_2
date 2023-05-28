<?php
    // hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường
    function countNumber02(){
        for($x=1; $x<=100; $x++){
            if($x%2==0){
                echo ("<b>$x </b>");
            }else{
             echo ("$x ");
            } 
        }
    }

            //commant
            countNumber02();
?>