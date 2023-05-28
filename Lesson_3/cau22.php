<?php
    // ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
    function findUS_BS($a, $b) {
        $uscln = $a;
        $temp = $b;
        while ($temp != 0) {
            $r = $uscln % $temp;
            $uscln = $temp;
            $temp = $r;
        }
        $bscnn = ($a * $b) / $uscln;
        echo "USCLN: $uscln và BSCNN: $bscnn";
    
    }
            //cau lenh
            findUS_BS(6, 10);
?>