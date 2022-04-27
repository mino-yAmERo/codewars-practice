<?php 
    //------  Bouncing Balls ------//
    // https://www.codewars.com/kata/5544c7a5cb454edb3c000047
    bouncingBall(3.0, 0.66, 1.5);
    bouncingBall(30.0, 0.66 ,1.5);
    bouncingBall(3.0, 1.0, 1.5);
    
    function bouncingBall($h, $bounce, $window) {
        $count = 0;
        if($h<=0 || ($bounce<=0 ||$bounce>=1) || $window>=$h) $count = -1 ;
        do{
            if ($count== -1) break;
            $count+=1;
            $h*=$bounce;
            if ($h<=$window) break;
            $count+=1;  

        }while($h>$window);

        echo $count . "<br>";
        return $count;
    }
?>