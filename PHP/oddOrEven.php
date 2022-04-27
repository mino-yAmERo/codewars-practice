<?php 
    //------ Odd or Even? ------//
    // https://www.codewars.com/kata/5949481f86420f59480000e7
    oddOrEven([0, 1, 5]);
    oddOrEven([0, 1, 3]);
    oddOrEven([1023, 1, 2]);

    function oddOrEven(array $a): string {
        $sum = 0;
        foreach ($a as $value){
            $sum+=$value;

        }
        $result = "";
        if($sum%2 == 0){
            $result="even";
        }else{
            $result="odd";
        }
        echo $sum." : " . $result ."<br>";
        return $result;
        
    }
?>