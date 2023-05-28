<?php
    function findPositiveNumber ($array){
        $max = $array[0];
        foreach ($array as $value){
            if($value > 0 && $value > $max){
                    $max = $value;
            }
        }
        echo "Số dương lớn nhất trong mảng là: $max";
    }

    $number = [1, 3, 5, -7, 2];
    findPositiveNumber($number);
?>