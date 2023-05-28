<?php
    function findNegativeNumber ($array){
        $negativeMax = $array[0];
        foreach ($array as $value){
            if($value < 0 && $value < $negativeMax){
                    $negativeMax = $value;
            }
        }
        echo "Số dương lớn nhất trong mảng là: $negativeMax";
    }

    $number = [1, 3, 5, -7, 2];
    findNegativeNumber($number);
?>