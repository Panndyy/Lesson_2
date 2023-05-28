<?php
    // tìm số nguyên tố trong một khoảng cho trước
    function isPrimeNumber($arr) {
        foreach($arr as $n){
            $squareRoot = sqrt ( $n );
            for($i = 2; $i <= $squareRoot; $i++) {
                if($n%2 !=0){
                    if ($n % $i != 0) {
                        echo"$n ";
                        break;
                    }
                }
            }
        }
        
    }
            //caulenh
            echo "Câu 8: ";
            $array = array(3,5,7,9,2,13,34,24,15,26,17);
            isPrimeNumber($array);
?>