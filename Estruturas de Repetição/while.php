<?php 
    // while é uma estrutura de repetição, podendo executar um codigo n vezes ate satisfazer a sua condição;
    // geralmente é necessario um contador para atingir a condição;

    /* ex: 
        while(condicao) {
            codigo;
        } 
    */

    $x = 0;

    while($x < 10) {
        echo $x . "<br";

        // o tal do contador
        $x++; // $x = $x + 1;
    }

    $y = 0;

    while($y < 10) {
        echo $y . "<br>";

        $y = $y + 2;
    }

    $z = 10;

    while($z > 0) {
        if($z % 2 != 0) {
            echo $z . "<br>";
        }
    }
?>