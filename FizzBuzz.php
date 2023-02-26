<?php 
    $i = 1;
    while($i < 20) {
            if($i % 3 == 0 && $i % 5 == 0) {
                echo "Fizz Buzz \n";
            } else if ($i % 3 == 0) {
                echo "Fizz \n";
            } else if ($i % 5 == 0) {
                echo "Buzz \n";
            } else {
                echo "$i \n";
            }

        $i++;
    }
?>