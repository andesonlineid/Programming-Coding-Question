<?php 


function PalindromeTest($value="kodok") {

    $sizeOfData = strlen($value); // count size of character from string
  
    for($i=1; $i < ($sizeOfData - 1)  / 2; $i++) {

       if($value[$i] != $value[($sizeOfData - 1 ) - $i]) {
        return  "$value is not palindrome";
    
     }

    }

    return "$value is palindrome";

}

echo PalindromeTest("Singa");



?>