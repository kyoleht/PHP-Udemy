<?php 
    $x = 0;

    while($x < 10) {
        echo $x . "<br>";

        if($x=== 5) {
            echo "Terminando o loop..." . "<br>";
            break;
        }

        $x++;
    }

    echo "O loop foi concluído";
?>