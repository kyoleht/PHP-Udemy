<?php 

    // crie um array de 1 a 10;
    // utilize o loop 'for' para criar este array;
    // dica: você pode utilizar o método array_push(arr, elemento) para inserir um elemento em um array;
    // imprima o array criado com print_r;

    $arr = [];

    for($i = 1; $i <= 10; $i++) {

        array_push($arr, $i); // array e o elemento '$i'

    }

    print_r($arr);

?>