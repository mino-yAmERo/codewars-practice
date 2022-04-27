<?php
//------ Highest Scoring Word ------//
// https://www.codewars.com/kata/57eb8fcdf670e99d9b000272
$str = "man i need a taxi up to ubud";
$str2 = "what time are we climbing up the volcano";
high($str);
high($str2);


function high($x) {
    $arr = explode(" ", $x);
    $newarr = array_map("ex",$arr);
    $result = $arr[(array_search(max($newarr),$newarr))];
    echo "$result";
    return $result ;

}
function ex ($input){
        $str = strtolower($input);
        $sum = 0;
        for ($i = 0; $i < strlen($str); $i++){
            $sum += ord($str[$i])-96;      
        } 
        return $sum ;
}
?>