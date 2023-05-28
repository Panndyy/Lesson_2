<?php
    // tính tổng của các số từ 1 đến n
    function countNumber($n) {
        $count = 0;
        for($i=1; $i<= $n; $i++){
            $count += $i; //$count  = $count +$i
        }
        echo "$count";
    }
            //cau lenh
            echo "Câu 2: ";
            countNumber(100);
?>