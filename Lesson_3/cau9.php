<?php
    // tính tổng của các số trong một mảng
    function countArr($n) {
        $count = 0;
        for($i=1; $i<= $n; $i++){
            $count += $i;
        }
        echo "$count";
    }
            //cau lenh
            echo "Câu 9: ";
            countNumber(100);
?>