<?php

$x = 10;

switch ($x) { //aqui ele analisa a variavel $x
    case 0: // nosso primeiro caso
        echo "X é igual a 0 <br>"; //se a variavel $x for igual a 0, como é o caso, ele executa esse echo como se fosse um "true";
        break;
    case 1:
        echo "X é igual a 1 <br>";
        break;
    default:
        echo "Nenhum dos valores mencinados são verdadeiros. <br>";
}


$nome = "Rafael";

switch($nome) {
    case "Rafael":
        echo "Nome é igual a Rafael";
        break;
    case "Joseph":
        echo "Nome é igual a Joseph";
    default:
        echo "Nenhum nome foi encontrado.";
}