<?php  
    // Kiểm tra số là chẵn hay lẻ
    function checkFomat($number){
        if($number%2==0){
            echo ("Số chẵn");
        }else{
            echo ("Số lẻ");
        }
    }
            // commant 
            checkFomat(5);
            echo ('<br/>');

    // Kiểm tra học lực của học sinh
    function arangeScore($score01, $score02){
        $mediunScore = $score01*0.3 + $score02*0.7;
        if ($mediunScore >= 9) echo ("Học lực xuất sắc");
        if ($mediunScore >= 7 & $mediunScore <=9) echo ("Học lực khá");
        if ($mediunScore >= 5 & $mediunScore <=7) echo ("Học lực trung binh");
        if ($mediunScore <= 5) echo ("Học lực yếu");
    }
            // commant
            arangeScore(6,7);
            echo ('<br/>');

    // Kiểm tra năm nay là năm chẵn hay lẻ
    function checkDatee(){
        $date = getdate();
        if($date['year'] %2==0){
            echo ("Năm nay là năm chẵn");
        }else{
            echo("Năm nay là năm lẻ");
        }
    }  
            //commant
            checkDatee();
            echo ('<br/>');
    
    // In ra các số từ 1 đến 100
    function countNumber(){
        for($x=1; $x<=100; $x++){
            echo ("$x ");
        }
    }
            //commant
            countNumber();
            echo ('<br/>');
    
    // hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường
    function countNumber02(){
        for($x=1; $x<=100; $x++){
            if($x%2==0){
                echo ("<b>$x </b>");
            }else{
             echo ("$x ");
            } 
        }
    }

            //commant
            countNumber02();
            echo ('<br/>');

    // Sử dụng vòng lặp for each làm bài
    function useFor(){
        $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
        foreach ($nam as $element){
            echo ("$element ");
        }

    }

            //commant
            useFor();
            echo ('<br/>');
?>