<?php 
    // Tutorial before training kata//
    //------ Multiply ------//
    // https://www.codewars.com/kata/50654ddff44f800200000004
    multiply(1, 1);
    multiply(2, 3);
    multiply(3, 5);
    multiply(5, 3);
    
    function multiply($a, $b) {
        $c = $a * $b;
        echo $a. " * ". $b . " = " . $c . "<br>";
        return $c;
    }
?>