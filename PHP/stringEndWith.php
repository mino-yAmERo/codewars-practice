<?php 
    //------ String ends with ------//
    // https://www.codewars.com/kata/51f2d1cafc9c0f745c00037d
    solution("samurai", "ai"); //should return true
    solution("sumo", "omo"); //should return false
    solution('yes this will pass', ''); //should return true
    solution('this will not pass', '`^$<>()[]*|'); //should return false

    function solution($str, $ending) {
        $count= strlen($ending);
        $newstr= strrev($str);
        $newending= strrev($ending);
        $result = substr_compare($newstr,$newending,0,$count);

        $res=null; 
        if($result==0){
            $res=true;
        } else {
            $res=false;
        }
        echo "result : " . $res . "<br>";
        return $res;
    }

?>