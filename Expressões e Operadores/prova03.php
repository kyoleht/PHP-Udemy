<?php 
    /* Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:

"eletrônicos": 10% de desconto.

"vestuário": 20% de desconto.

"alimentos": 5% de desconto.

Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função. */

    function calcularDesconto($valorProduto, $categoria) {
        // definindo os descontos por categoria 
        $descontosEletronicos = 0.10; // 10%
        $descontosVestuario = 0.20; // 20%
        $descontosAlimentos = 0.5; // 5%

        // aplicando os descontos com base na categoria
        switch ($categoria) {
            case "eletrônicos":
                $valorProdutoDesconto = $valorProduto - ($valorProduto * $descontosEletronicos);
                break;
            case "vestuário":
                $valorProdutoDesconto = $valorProduto - ($valorProduto * $descontosVestuario);
                break;
            case "alimentos":
                $valorProdutoDesconto = $valorProduto - ($valorProduto * $descontosAlimentos);
                break;
            default:
                //se a categoria for desconhecida, nenhum desconto sera aplicado
                $valorProdutoDesconto = $valorProduto;
                break;
        }

        return $valorProdutoDesconto;

    }

    // exemplos de uso
    $valorProdutoEletronicos = calcularDesconto(100, "eletrônicos");
    $valorProdutoVestuario = calcularDesconto(50, "vestuario");
    $valorProdutoAlimentos = calcularDesconto(30, "alimentos");
    $valorProdutoDesconhecido = calcularDesconto(80, "desconhecido");

    // exibindo os resultados
    echo "Valor com desconto para Eletrônicos " . $valorProdutoEletronicos . "<br>";
    echo "Valor com desconto para Vestuário " . $valorProdutoVestuario . "<br>";
    echo "Valor com desconto para Alimentos " . $valorProdutoAlimentos . "<br>";
    echo "Valor com desconto para a categoria desconhecida " . $valorProdutoDesconhecido . "<br>";

?>