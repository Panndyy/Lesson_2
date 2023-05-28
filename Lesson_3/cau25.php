<?php
    // kiểm tra xem một số có phải là số nguyên tố hay không.
    function IsPrime($number){
        if ($number <= 1) {
            return false; 
        }
    
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; 
            }
        }
    
        return true;
    }

    if(IsPrime(23)){
        echo "Số đó là số nguyên tố";
    }else{
        echo "Số đó không phải số nguyên tố";
    }
?>