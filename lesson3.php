<?php
    // kiểm tra xem một số có phải là số chẵn hay không
    function isFormat ($x) {
        if($x%2==0) echo "So chan";
        else echo "So le";
    }
            //cau lenh
            echo "Câu 1: ";
            isFormat(2);
            echo("</br>");

    // tính tổng của các số từ 1 đến n
    function countNumber($n) {
        $count = 0;
        for($i=1; $i<= $n; $i++){
            $count += $i;
        }
        echo "$count";
    }
            //cau lenh
            echo "Câu 2: ";
            countNumber(100);
            echo("</br>");

    // in ra bảng cửu chương từ 1 đến 10
    function printCore(){
        for($i=1; $i<=10; $i++){
            for($j=1; $j<=10; $j++){
                echo $i*$j . " ";
            }
            echo("</br>");
        }
            
    }
            //caulenh
            echo "Câu 3: ";
            printCore();
            echo("</br>");

    //kiểm tra xem một chuỗi có chứa một từ cụ thể
    function findText($str, $char, $position){
        echo (strpos($str, $char, $position));
      }
          //cau lenh
          echo "Câu 4: ";
          findText("Xin chao cac ban", "ban", 0 );
          echo("</br>");

    // tìm giá trị lớn nhất và nhỏ nhất trong một mảng
    function minMax($arr){
        foreach($arr as $var){
            $min = $arr[0];
            $max = $arr[0];
            if($min > $var){
                $min =$var;
            } else if($max < $var){
                 $max = $var;
            }
            
        }
        echo "Min: $min , Max: $max";
    }
            //caulenh
            echo "Câu 5: ";
            $array = array(0,1,2,3,4,5,7,6,8,9);
            minMax($array);
            echo("</br>");

    // sắp xếp một mảng theo thứ tự tăng dần
    // function arrangeArr($arr){
    //     sort($arr);
    //     print_r ($arr);
    // }
    //         //caulenh
    //         echo "Câu 6: ";
    //         $array = array(1,5,2,3,7,9);
    //         arrangeArr($array);

    // tính giai thừa của một số nguyên dương.
    function factorial($n){
        $value=1;
        for($i=1; $i<=$n; $i++){
            $value *=$i;
        }
        echo "$value";
    }
            //caulenh
            echo "Câu 7: ";
            factorial(3);
            echo("</br>");

    // tìm số nguyên tố trong một khoảng cho trước
    function isPrimeNumber($arr) {
        foreach($arr as $n){
            $squareRoot = sqrt ( $n );
            for($i = 2; $i <= $squareRoot; $i++) {
                if($n%2 !=0){
                    if ($n % $i != 0) {
                        echo"$n ";
                        break;
                    }
                }
            }
        }
        
    }
            //caulenh
            echo "Câu 8: ";
            $array = array(3,5,7,9,2,13,34,24,15,26,17);
            isPrimeNumber($array);
            echo("</br>");
            
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
            echo("</br>");

    // in ra các số Fibonacci trong một khoảng cho trước
    // kiểm tra xem một số có phải là số Armstrong hay không.
    function isArrmstrong($n){

        $sum = 0;
        $lengthNumber = strlen(strval($n));
        for($i=1; $i<=$lengthNumber; $i++){
            $x = $n%10;
            $sum += pow($x,$lengthNumber);
            $n=$n%10;
        }
        if($sum == $n){
            echo "Đây là số Armstrong";
        } else{
            echo "Đây không phải số Armtrong";
        }
    }
            //caulenh
            echo "Câu 11: ";
            isArrmstrong(407);
            echo("</br>");

    // chèn một phần tử vào một mảng ở vị trí bất kỳ

    // loại bỏ các phần tử trùng lặp trong một mảng
    function deleteValue($arr){
        
    }
    // để tìm vị trí của một phần tử trong một mảng
    // function findLocal($arr, $element){
    //     foreach($arr as $key => $value){
    //         if($value == $element){
    //             $x = $key++;
    //             $x++;
    //             echo "Vị trí của phần tử là: ". $x;
    //         }
    //     }
    // }
    function findLocal($value, $arr){
        $key = array_search("$value", $arr);
        $key++;
        echo "Vị trí của phần tử là: ". $key;
    }
            //caulenh
            echo "Câu 14: ";
            $array = array('cam', 'táo', 'xoài', 'mận');
            // findLocal($array, 'cam');
            findLocal('cam', $array);
            echo("</br>");
    // đảo ngược một chuỗi
    function arrReverse($string){
        echo strrev($string);
    }
            //caulenh
            echo "Câu 15: ";
            arrReverse("hello");
            echo("</br>");

    // tính số lượng phần tử trong một mảng
    // function countValueArr($arr){
    //     print_r(array_count_values($arr));
    // }
    //         //câu lệnh chạy
    //          echo "Câu 16: ";
    //         $array = array('cam', 'tao', 'cam', 'dao', 'xoai');
    //         countValueArr($array);

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
            echo("</br>");
    // đếm số lần xuất hiện của một phần tử trong một mảng..
    function cau18($array, $element){
        $count = 0;
        foreach($array as $value){
            if($value == $element){
                $count++;
            }
        }
        echo "Câu 18: Số lần xuất hiện : $count";
    }
            //câu lệnh
            $array = array('1','2','3','4','1');
            cau18($array, '1');
            echo("</br>");
    // sắp xếp một mảng theo thứ tự giảm dần
    function arrDESC($arr){
        $value = sort($arr,SORT_NUMERIC);
        print_r($value);
    }
            //caulenh
            echo "Câu 17: ";
            $array = array('1','2','3','4');
            arrDESC($array);
            echo("</br>");


    // thêm một phần tử vào đầu hoặc cuối của một mảng
    // tìm số lớn thứ hai trong một mảng
    // ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
    // kiểm tra xem một số có phải là số hoàn hảo
    // tìm số lẻ lớn nhất trong một mảng
    // kiểm tra xem một số có phải là số nguyên tố
    // tìm số dương lớn nhất trong một mảng
    // tìm số âm lớn nhất trong một mảng
    // tính tổng các số lẻ từ 1 đến n
    // tìm số chính phương trong một khoảng cho trước
    //kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác


?>