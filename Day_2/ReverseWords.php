<?php
class ReverseWords {
    function reverse($str) {
        $arr = str_word_count($str,1);
        $result="";
        $length=count($arr);
        for($i=1;$i<=$length;$i++) {
            $str1=array_shift($arr);
            $result.=strrev($str1)." ";
        }
        echo $result;
    }
}
$obj=new ReverseWords();
$obj->reverse("tech aspect");
?>