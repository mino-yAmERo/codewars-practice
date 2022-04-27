<?php 
    //------ Highest And Lowest ------//
    // https://www.codewars.com/kata/554b4ac871d6813a03000035
    highAndLow("1 2 3 4 5"); 
    highAndLow("1 2 -3 4 5");

    function highAndLow($numbers) {
        $arr = explode(" ",$numbers);
        echo "max : ".max($arr)."<br> min : ".min($arr)."<br>";
        return max($arr)." ".min($arr);

    }
?>