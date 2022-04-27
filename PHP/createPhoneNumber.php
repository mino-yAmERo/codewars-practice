<?php 
    //------ Create Phone Number ------//
    // https://www.codewars.com/kata/525f50e3b73515a6db000b83
    createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);

    function createPhoneNumber($numbersArray) {
        $str = implode("",$numbersArray);
        
        $newstr="(";
        for($i=0;$i<strlen($str);$i++){
            $newstr.=$str[$i];
            if($i==2) $newstr.=") ";
            if($i==5) $newstr.="-";
    
        }
        echo "Phone Number: " . $newstr;
        return $newstr;
    }
?>