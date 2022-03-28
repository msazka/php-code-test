<?php
function solution($N) {
/*
1. find the substrings starting from 1 and ending on 1
2. find the length of each substrings
5. the longest length substrings is the binary gap
*/
$binaryRepresentation = decbin($N);
$binRepArr = explode("1",$binaryRepresentation);
$results = array();
$gaps = array();
$gapFound = false;
$rsgap =0;
/* [1..2,147,483,647].*/
if ($N > 0) {
    foreach ($binRepArr as $key => $value) {
       $strlen = strlen($value);       
       if ($strlen > 1 ) {
           $gapStr = "1".$value."1";       
        if(strpos($binaryRepresentation, $gapStr) !== false){
                $gaps[] = $gapStr;
                $gapFound = true;
         }         
       }
    }
   
    /*find in one with max lenthn string*/
    if ($gapFound) {
        echo "IF found";
          print_r($gaps);
          $gap = max($gaps);      
          $gap = trim($gap,"1");
          $gap = strlen($gap);
          $rsgap = (int)$gap;
    }
       
}else {   
    $rsgap = 0;
}
return $rsgap;
}

solution(32)