<?php 

for($outter=1; $outter <= 5; $outter++) {
    for($inner=1; $inner <= $outter; $inner++) {
            echo "$inner";
    }
    echo "\n";

    if($outter == 5) {
        for($i=4; $i >= 1; $i--) {
            for($j=1; $j <= $i; $j++) {
                echo "$j";
            }
            echo "\n";
        }
    }
}



?>