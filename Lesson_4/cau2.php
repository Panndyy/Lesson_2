<?php
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
?>