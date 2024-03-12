<?php 
    function declararDesconto($idClient, $categoria) {
        $descontoClient1 = 0.5;
        $descontoClient2 = 10;
        $descontoClient3 = 30;

        switch($categoria) {
            case 'clientid1':
                $descontoAplicado = $descontoClient1 - ($descontoClient1 * 0.5);
                break;
            case 'cLientid2' :
                $descontoAplicado = $descontoClient2 - ($descontoClient2 * 10);
                break;
            case 'clientid3' :
                $descontoAplicado = $descontoClient3 - ($descontoClient3 * 30);
                break;
            default:
                $descontoAplicado = 0;
                echo "Nenhum desconto foi aplicado. <br>";
        }

        return $descontoAplicado;

    }

    $descontoAplicado = declararDesconto(599.90, 'clientid1');
    echo "Um desconto de: " . $descontoAplicado . "foi aplicado. Boas compras!" . "<br>";

    $descontoAplicado = declararDesconto(599.90, 'clientid2');
    echo "Um desconto de: " . $descontoAplicado . "foi aplicado. Boas compras!" . "<br>";

    $descontoAplicado = declararDesconto(599.90, 'clientid3');
    echo "Um desconto de: " . $descontoAplicado . "foi aplicado. Boas compras!" . "<br>";
?>