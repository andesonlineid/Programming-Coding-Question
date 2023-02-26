<?php 

    function AscendingSort($value){
        for($outter=0; $outter < count($value) - 1; $outter++) {
            $temp = null;
            for($inner = 0; $inner < count($value) - 1; $inner++) {
                    if($value[$inner] > $value[$inner+1]) {
                        $temp = $value[$inner];
                        $value[$inner] = $value[$inner+1];
                        $value[$inner+1] = $temp;
                    }
                }
            }

        return $value;
   
        }
     
   echo var_dump(AscendingSort([35,12,20,100,50]));

   

?>