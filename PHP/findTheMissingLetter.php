<?php 
    //------ Find the missing letter ------//
    // https://www.codewars.com/kata/5839edaa6754d6fec10000a2

    findMissingLetter(['a','b','c','d','f']);
    findMissingLetter(['O','Q','R','S']);

    function findMissingLetter($array){
        $a = array_map("ord",$array);
        $x = 0;
        // print_r($a); echo "<br>";
        for ($i=0;$i<count($a);$i++){
            if( ($a[$i+1])- ($a[$i]) == 2){
                $x += $i;
                break;
            }
        }
        $missing = $a[$x] +1;
        echo "the missing letter : ".chr($missing)."<br>";
        return chr($missing);
        }

?>
