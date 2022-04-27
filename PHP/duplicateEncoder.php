<?php 
    //------ Duplicate Encoder ------//
    // https://www.codewars.com/kata/54b42f9314d9229fd6000d9c
    duplicateEncode("din");
    duplicateEncode("recede");
    duplicateEncode("Success");


    function duplicateEncode($word){
        echo "word : " . $word ."<br>";
        $res ="";
        $count = strlen($word); 
        for ($i=0;$i<$count;$i++){
            $a= $word[$i];
    
            for($j=0;$j<$count;$j++){
                if($i==$j) continue;
                $b= $word[$j];
                $result = strcasecmp($a,$b);
    
                if ($result==0) {
                    $res .=")" ;
                    break;
                }      
            }   
    
            if ($result!=0) $res .= "(";     
        }
        echo "result : " . $res . "<br>";
        return $res;
    }
?>