<?php

function declararDesconto($valorCompra, $categoria) {
    $descontoClient1 = 0.5;
    $descontoClient2 = 0.1; // 10%
    $descontoClient3 = 0.3; // 30%

    switch (strtolower($categoria)) {
        case 'clientid1':
            $descontoAplicado = $valorCompra * $descontoClient1;
            break;
        case 'clientid2':
            $descontoAplicado = $valorCompra * $descontoClient2;
            break;
        case 'clientid3':
            $descontoAplicado = $valorCompra * $descontoClient3;
            break;
        default:
            $descontoAplicado = 0;
            echo "Nenhum desconto foi aplicado. <br>";
    }

    return $descontoAplicado;
}

$valorCompra = 599.90;

$descontoAplicado = declararDesconto($valorCompra, 'clientid1');
echo "Um desconto de: " . $descontoAplicado . " foi aplicado. Boas compras!" . "<br>";

$descontoAplicado = declararDesconto($valorCompra, 'clientid2');
echo "Um desconto de: " . $descontoAplicado . " foi aplicado. Boas compras!" . "<br>";

$descontoAplicado = declararDesconto($valorCompra, 'clientid3');
echo "Um desconto de: " . $descontoAplicado . " foi aplicado. Boas compras!" . "<br>";