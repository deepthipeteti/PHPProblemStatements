<?php

class  DifferenceOfDigits{
    
    function getDifferenceOfDigits($num) {
        
        if( $num < 0 ){
            return -1;
        }else if($num > 99){
            return -2;
        } else if($num > 0 and $num < 10){
            return -3;
        } else{
            $first = $num % 10;
            $second = $num /10;
            echo $first - floor($second);
        }
    }
    
}


?>