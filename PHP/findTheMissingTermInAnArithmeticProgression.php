<?php 
    //------ Find the missing term in an Arithmetic Progression ------//
    // https://www.codewars.com/kata/52de553ebb55d1fca3000371

    findMissing([1, 3, 5, 9, 11]);

    function findMissing($list){
        $count = count($list);
        if ($count < 3) {
            echo "The size should be at least 3 elements <hr>";
            return;
        }
        $diffarr = [];
        for ($i=0;$i<count($list);$i++) {

            if (($i+1) == count($list)) break;
            $x = abs($list[$i+1]);
            $y = abs($list[$i]);

            if ($x==$y) {
                if($list[$i+1] < $list[$i]){
                    $diff = $list[$i] - $list[$i+1]; 
                }else{
                    $diff = $list[$i+1] - $list[$i];
                }

            }else if($list[$i+1] < $list[$i]){
                $diff = abs($list[$i+1] - $list[$i]);
            }else if($list[$i+1] >=0 && $list[$i]<0){
                $diff = $list[$i+1] - $list[$i];
            }else{
                $diff = abs($x-$y);
            }
            array_push($diffarr,$diff);   
        }

        $countarr = array_count_values($diffarr);
        $diff = min(array_keys($countarr)); 
        $index = array_search(max($diffarr),$diffarr);

        if ($list[$index+1] < $list[$index]){
            $newvalue = $list[$index]-$diff;
        } else {
            $newvalue = $list[$index]+$diff;
        }
        array_splice($list,$index+1,0,$newvalue);
        echo "result : ".$list[$index+1]."<br>";
        return $list[$index+1];
    }
?>