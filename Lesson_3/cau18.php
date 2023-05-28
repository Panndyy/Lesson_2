<?php
    // đếm số lần xuất hiện của một phần tử trong một mảng..
    function cau18($array, $element){
        $count = 0;
        foreach($array as $value){
            if($value == $element){
                $count++;
            }
        }
        echo "Câu 18: Số lần xuất hiện : $count";
    }
            //câu lệnh
            $array = array('1','2','3','4','1');
            cau18($array, '1');
?>