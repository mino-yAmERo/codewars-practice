<?php 
    //------ Split String ------//
    // https://www.codewars.com/kata/515de9ae9dcfc28eb6000001
    solution("abcdef");
    solution("abcdefg");

    function solution($str) {
        if($str=="") return [];
        $arr = str_split($str, 2);
        
            $newarr = array_map("strlen", $arr);
            
            $n = count($arr);
            
            for ($i = 0; $i < $n; $i++) {
                $count = $newarr[$i];
                
                if ($count == 1) {
                    $arr[$i] .= "_";
                }
            }     
            print_r($arr);echo "<br>";
        return $arr;
    }
?>