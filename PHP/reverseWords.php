<?php 
    //------ Reverse Words ------//
    // https://www.codewars.com/kata/5259b20d6021e9e14c0010d4/php
    $str = "olleh olleh";
    $str2 = "ehT kciuq nworb xof spmuj revo eht yzal .god";
    reverseWords($str);
    reverseWords($str2);

    function reverseWords($str) {
        echo "Input : ".$str."<br>";
        $arr = explode(" ",$str);
        $newarr = array_map("strrev",$arr);
        $result = implode(" ",$newarr);
        echo "Result: " . $result."<br>";
        return $result;
    }
?>