<?php 

    $var_off = 10;
    $emoticon = ":)";

    for($i = 0; $i <= 10; $i++) {
        if($i == 4) {
            echo "$emoticon <br>";
        }

        if($i == 8) {
            break;
        }

        echo "$i <br>" ;
    }
    
?>