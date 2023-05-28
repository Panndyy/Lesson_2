<?php
//Tính tông các số lẻ từ 1 đên n
function countNumber($n) {
    $count = 0;
    for($i=1; $i<= $n; $i++){
        if($i%2 !=0) $count += $i; //$count  = $count +$i
    }
    echo "$count";
}
        //cau lenh
        countNumber(100);
?>