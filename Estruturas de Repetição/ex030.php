<?php 

    // crie um array com numeros de 1 a 20;
    // crie um loop 'for' para este array;
    // imprima apenas os pares;

    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    for($i = 0; $i <= count($arr); $i++) {

        if($arr[$i] % 2 == 0) {
            echo "$arr[$i] <br>";
        }

    }

    // var_dump($arr);

    // echo "count($arr[3])";

?>