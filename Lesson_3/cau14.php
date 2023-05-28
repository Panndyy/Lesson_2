<?php
    // để tìm vị trí của một phần tử trong một mảng
    function findLocal($value, $arr){
        $key = array_search("$value", $arr);
        $key++;
        echo "Vị trí của phần tử là: ". $key;
    }
            //caulenh
            echo "Câu 14: ";
            $array = array('cam', 'táo', 'xoài', 'mận');
            // findLocal($array, 'cam');
            findLocal('cam', $array);
?>