<?php 
    function calcularDesconto($valorProduto, $categoria) {
        $descontosCamisas = 0.10;
        $descontosSapatos = 0.30;
        $descontosShorts = 0.5;

        switch($categoria) {
            case "camisas":
                $valorDescontoAplicado = $valorProduto - ($valorProduto * $descontosCamisas);
                break;
            case "sapatos":
                $valorDescontoAplicado = $valorProduto - ($valorProduto * $descontosSapatos);
                break;
            case "shorts":
                $valorDescontoAplicado = $valorProduto - ($valorProduto * $descontosShorts);
                break;
            default:
                $valorDescontoAplicado = $valorProduto;
                break;
        }   

        return $valorDescontoAplicado;

    }

    $valorDescontoAplicado = calcularDesconto(69.90, "camisas");
    echo "Desconto aplicado no valor de: " . $valorDescontoAplicado . "<br>";

    $valorDescontoAplicado = calcularDesconto(399.90, "sapatos");
    echo "Desconto aplicado no valor de: " . $valorDescontoAplicado . "<br>";

    $valorDescontoAplicado = calcularDesconto(49.90, "shorts");
    echo "Desconto aplicado no valor de: " . $valorDescontoAplicado . "<br>";
?>