<?php 

    // crie um array com valores inteiro de 10 a 100, com incrementos de 10;
    // aplique um loop nesse array;
    // quando entrar os valores 30 ou 40, pule para a proxima execução;


    $arr = [10,20,30,40,50,60,70,80,90,100];


    foreach ($arr as $numeroAtual) {
        if ($numeroAtual == 30 || $numeroAtual == 40) {
            continue;
        }

        echo "Valores: $numeroAtual <br>"; 
    }
?>