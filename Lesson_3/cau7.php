<?php
    // tính giai thừa của một số nguyên dương.
    function factorial($n){
        $value=1;
        for($i=1; $i<=$n; $i++){
            $value *=$i;
        }
        echo "$value";
    }
            //caulenh
            echo "Câu 7: ";
            factorial(3);
?>