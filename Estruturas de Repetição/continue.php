<?php 

    $a = 10;

    while($a > 0) {
        if($a == 5 || $a == 7) {
            echo "skiped $a <br>";

            $a--;

            continue;
        }

        echo "loop has been executing... $a <br>";


        $a--;
    }



?>