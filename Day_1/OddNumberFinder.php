<?php
    class OddNumberFinder
    {
        function checkOddNumber($num) {
            if($num%2 == 0) {
                return false;
            } else {
                return true;
            }
        }
    }
    $odd = new OddNumberFinder();
    $odd->checkOddNumber(22);
?>