<?php
    // tìm giá trị lớn nhất và nhỏ nhất trong một mảng
    function minMax($arr){
        foreach($arr as $var){
            $min = $arr[0];
            $max = $arr[0];
            if($min > $var){
                $min =$var;
            } else if($max < $var){
                 $max = $var;
            }
            
        }
        echo "Min: $min , Max: $max";
    }
            //caulenh
            echo "Câu 5: ";
            $array = array(0,1,2,3,4,5,7,6,8,9);
            minMax($array);
?>