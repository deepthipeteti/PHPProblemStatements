<?php
class ListPrimes 
{
    function getPrimeNumber($range1, $range2) {
        if($range1 < 0 || $range2 < 0) {
            return -1;
        }
        else if($range1 > $range2) {
            return -2;
        }
        else {
            $flag = 0;
            $prime = "";
            for($i = $range1; $i <= $range2; $i++) {
                for( $j = 2; $j < $i; $j++)
                {
                    if( $i % $j == 0)
                    {
                        $flag = 0;
                        break;
                    }
                    else
                    {
                        $flag = 1;
                    }
                }
                if($flag == 1)
                {
                   $prime .= $i." ";
                }
            }
            return $prime;
        }
    }
}
$obj = new ListPrimes();
echo $obj->getPrimeNumber(5,30);
?>