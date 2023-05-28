<?php
    // Kiểm tra năm nay là năm chẵn hay lẻ
    function checkDatee(){
        $date = getdate();
        if($date['year'] %2==0){
            echo ("Năm nay là năm chẵn");
        }else{
            echo("Năm nay là năm lẻ");
        }
    }  
            //commant
            checkDatee();
?>