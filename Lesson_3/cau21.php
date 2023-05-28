<?php
    function findSecondLargest($arr) {
        $max = $arr[0]; 
        $secondMax = null; 
    
        foreach ($arr as $num) {
            if ($num > $max) {
                $secondMax = $max;  
                $max = $num; 
            } elseif ($num != $max && ($secondMax === null || $num > $secondMax)) {
                $secondMax = $num;
            }
        }
    
        echo "Số lớn thứ hai trong mảng là: $secondMax";
    }
    
    // Sử dụng hàm
    $numbers = [5, 10, 3, 8, 7];
    findSecondLargest($numbers);
    
    
?>