<?php
    // kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
    function isPalindrome($string)   
		{  
		  if ($string == strrev($string))  
			  echo "Đây là chuỗi Palindrome";  
		  else  
          echo "Đây không là chuỗi Palindrome";  
		}  
            //câu lệnh
            echo "Câu 17: ";
            isPalindrome("hiih");
?>