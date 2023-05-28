<?php
    // 
    function isPerfectSquare($number) {
        $sqrt = sqrt($number);
    
        if(($sqrt * $sqrt) == $number){
            echo "Là số chính phương";
        }else{
            echo  "Không là số chính phương";
        }
    }

    isPerfectSquare(25);
?>