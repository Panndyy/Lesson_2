<?php
     // chèn một phần tử vào một mảng ở vị trí bất kỳ
    function addElement($array, $add){
        $countArr = count($array,COUNT_NORMAL);
        array_splice($array,rand(0,$countArr),0,$add);
        print_r ($array);
    }
            //câu lệnh
            echo "Câu 12: ";
            $array = array('cam', 'táo', 'xoài', 'mận');
            addElement($array, "hồng");
?>