<?php 

function sumEvenNumbers($num) {
    $sum = 0; // Variável para armazenar a soma

    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 === 0) {
            $sum += $i; // Somar apenas se for par
        }
    }

    return $sum; // Retorna a soma dos números pares
}

echo sumEvenNumbers(10); // Exibe a soma dos números pares até 10


?>