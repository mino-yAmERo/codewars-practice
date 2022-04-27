<?php 
    //------ Ones and Zeros ------//
    // https://www.codewars.com/kata/578553c3a1b8d5c40300037c
    $arr = [0,0,0,1];
    $arr2 = [1,1,1,1];
    binaryArrayToNumber($arr);
    binaryArrayToNumber($arr2);

    function binaryArrayToNumber($arr) {
        $count = count($arr);
        $num = "";
        for ($i = 0; $i < $count; $i++){
            $num .= $arr[$i];
        }
        echo "result : ".bindec($num)."<br>";
        return bindec($num);
    }
?>