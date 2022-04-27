<?php 
    //------ Build a pile of Cubes ------//
    // https://www.codewars.com/kata/5592e3bd57b64d00f3000047
    findNb(4183059834009);
    findNb(24723578342962);
    findNb(135440716410000);

    function findNb($m) {
        $total = 0;
        $n = 0;
        while($total<$m){
            $total += pow(($n),3);
            
            if($total==$m) break;
            if($total>$m) {
                $n=-1;
                break;
            }
            $n++;   
        }
        echo "result : ".$n."<br>";
        return $n;
    }
?>