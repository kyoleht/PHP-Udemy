<?php 

    if(5 >= 2 && 3645 > 0) {
        echo "true <br>";
    }

    else{
        echo "false <br>";
    }

    # com variaveis

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if($a < $b && $b >= $d) {
        echo "true <br>";
    }

    else{
        echo "false <br>";
    }

    # usando ()

    if(($d > $c && $b > $a) && $a === $b && $c != $d) {
        echo "true <br>";
    }

    else{
        echo "false <br>";
    }
?>