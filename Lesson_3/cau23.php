<?php
    // kiểm tra xem một số có phải là số hoàn hảo hay không.
    function IsPefectNumber($num){
        $count = 0;
        for($i=1; $i <$num; $i++){
            if($num %$i == 0){
                $count += $i;
            }
        }
        if($count == $num){
            echo "Số đó là số hoàn hảo";
        }else{
            echo "Không phải só hoàn hảo";
        }
    }

    IsPefectNumber(6);
?>