<?php
    class SumOfDigits {
        function getSumOfDigits($num) {
            $sum=0;
            $rem=0;
            if($num < -1) {
                return -1;
            }
            else if ($num > 99)
                return -2;
            else if($num > 0 && $num < 9)
                return -3;
            else {
                for($i=0; $i<strlen($num);$i++) {
                    $rem = $num%10;
                    $sum +=$rem;
                    $num=$num/10;
                }
                return $sum;
            }
        }
    }
?>