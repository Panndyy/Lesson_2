<?php
    // tìm số lẻ lớn nhất trong một mảng
    function findOddNumber ($array){
        $max = $array[0];
        foreach ($array as $value){
            if($value %2 != 0 && $value > $max){
                    $max = $value;
            }
        }
        echo "Số lẻ lớn nhất trong mảng là: $max";
    }

    $number = [1, 3, 5, 7, 2];
    findOddNumber($number);
?>