<?php
    // sắp xếp một mảng theo thứ tự giảm dần
    function arrDESC($arr){
        $value = sort($arr,SORT_NUMERIC);
        print_r($value);
    }
            //caulenh
            $array = array('1','2','3','4');
            arrDESC($array);
?>