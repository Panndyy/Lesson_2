<?php
    //kiểm tra xem một chuỗi có chứa một từ cụ thể
    function findText($str, $char, $position){
        if(strpos($str, $char, $position) == true){
            echo ("Đúng");
        } else {
            echo "sai";
        }
        
      }
          //cau lenh
          echo "Câu 4: ";
          findText("Xin chao cac ban", "ban", 0 );
?>