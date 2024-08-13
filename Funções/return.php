<?php 
    // o objetivo é armazenar o valor return em uma variável e utilizá-lo posteriormente no código
    
    function soma($num1, $num2) {
        return $num1 + $num2;
    }

    echo soma(10, 10) . '<br>';

    $x = soma(20, 20);
    echo $x . '<br>';

    $y = soma($x, 50); // x tem a soma de 20, 20, armazenada nas variaveis $num1 e $num2, podendo ser utilizada em algum outro momento
    echo $y . '<br>';

    function testeReturn() {
        return "Testing...";
    }

    $z = testeReturn();
    echo $z . '<br>';
?>