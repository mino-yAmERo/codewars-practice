<?php 
    //------ Consecutive strings ------//
    // https://www.codewars.com/kata/56a5d994ac971f1ac500003e
    longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2);
    longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1);
    longestConsec([],3);

    function longestConsec($strarr, $k) {
        $count = count($strarr);
        $maxvalue="";
        $arr = array();
        for($i=0;$i<$count;$i++){
            $str="";
            $n=$i;
            if($k>$count) break;
            if($k!=1 && ($n+$k)==($count+1)) break;
            for($j=0;$j<$k;$j++){
                $str .=$strarr[$n];
                $n++;
            }
            array_push($arr,$str);
        }
        if(!empty($arr)){
        $lengths = array_map("strlen", $arr);
        $max = max($lengths);
        $x =array_search($max,$lengths);
        $maxvalue = "$arr[$x]";
        }
        echo "result : " . $maxvalue . "<br>";
        return $maxvalue;
    }
?>