<?php   // 1-100的質數
    for ($i = 2; $i <= 100; $i++){ 
        $k = 1; 
        for ($j = 2; $j < $i ; $j++){ 
            if ($i % $j == 0){ 
            $k = 0; 
            break; 
            } 
        } 
        if ($k== 1){ 
           
            echo $i ." " ; 
        }
    } 
?>