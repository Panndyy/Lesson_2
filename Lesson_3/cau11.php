<?php
    // kiểm tra xem một số có phải là số Armstrong hay không.
    function isArrmstrong($n){

        $sum = 0;
        $lengthNumber = strlen(strval($n));
        for($i=1; $i<=$lengthNumber; $i++){
            $x = $n%10;
            $sum += pow($x,$lengthNumber);
            $n=$n%10;
        }
        if($sum == $n){
            echo "Đây là số Armstrong";
        } else{
            echo "Đây không phải số Armtrong";
        }
    }
            //caulenh
            echo "Câu 11: ";
            isArrmstrong(407);
?>