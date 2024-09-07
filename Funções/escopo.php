<?php 

    $a = 10;
    $b = 5;

    function testeEscopo() {
        $a = 5;

        global $b; //chamando a $b para o escopo local

        static $c = 0;

        $a++;
        $b++;
        $c++;

        echo "ESCOPO LOCAL DE A: $a . <br>";
        echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b . <br>";
        echo "ESCOPO STATIC DE C: $c . <br>";
    }

    echo "ESCOPO GLOBAL DE A: $a . <br>";
    echo "ESCOPO GLOBAL DE B: $b . <br>";

    testeEscopo(); // $c = 1;

    echo "ESCOPO GLOBAL DE B 2: $b . <br>";

    testeEscopo(); // $c = 2;
?>