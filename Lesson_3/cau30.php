<?php
    //kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
    function isSubstring($string, $substring) {
        if (strpos($string, $substring) !== false) {
            echo "là chuỗi con";  
        } else {
            echo "Không là chuỗi con"; 
        }
    }
?>