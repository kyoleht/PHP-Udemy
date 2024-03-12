<?php
// escreva uma função em que a categoria do cliente faz ele ter mais desconto, dependendo da classe

function descontoCliente($clientType, $categoria)
{
    $clienteNormal = 0.10;
    $clienteVip = 0.30;
    $clienteMaster = 0.5;

    switch ($categoria) {
        case "normal":
            $descontoAplicado = $clientType - ($clientType * $clienteNormal);
            break;
        case "vip":
            $descontoAplicado = $clientType - ($clientType * $clienteVip);
            break;
        case "master":
            $descontoAplicado = $clientType - ($clientType * $clienteMaster);
            break;
        default:
            $descontoAplicado = $clientType;
    }

    return $descontoAplicado; // a gente chama a variavel fora do switch, mas dentro da função
}

$descontoAplicado = descontoCliente(299.90, "normal");
echo "Sendo um cliente Normal, você pagará: " . $descontoAplicado . "<br>";

$descontoAplicado = descontoCliente(299.90, "vip");
echo "Sendo um cliente VIP, você pagará: " . $descontoAplicado . "<br>";

$descontoAplicado = descontoCliente(299.90, "master");
echo "Sendo um cliente Master, você pagará: " . $descontoAplicado . "<br>";
