<?php
    // in ra dãy Fibonacci trong một khoảng cho trước
    function isFibonacci ($start, $end){
        $numberFirst = 0;
        $numberSecond = 1;

        if($numberFirst >= $start) echo $numberFirst . " ";
        if($numberSecond >= $end) echo $numberSecond . " ";
        while(true){
            $numberNext = $numberFirst + $numberSecond;
            if($numberNext > $end){
                break;
            }
        if($numberNext>= $start) echo $numberNext . " ";
            $numberFirst = $numberSecond;
            $numberSecond = $numberNext;
        }
    }

    isFibonacci(10,100);
?>