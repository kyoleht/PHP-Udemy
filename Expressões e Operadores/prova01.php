<?php 
$a = 100;
$b = 10;

    function comparandoNumeros ($a, $b) {
        if($a > $b) {
            return "O primeiro número é maior.";
        } elseif ($a < $b) {
            return "O segundo número é maior";
         } else {
            return "Os números são iguais.";
         }
    }

$result = comparandoNumeros ($a, $b);
echo $result;
?>