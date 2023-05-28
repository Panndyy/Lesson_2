<?php
    function addElementToArray($array, $element) {
        if (rand(0,1) == 1) {
            array_unshift($array, $element);
        } else {
            array_push($array, $element);
        }
        print_r($array);
    }
    $array = array('cam', 'táo', 'xoài', 'mận');
    addElementToArray($array, "đào");
    
?>