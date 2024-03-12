<?php 

$idade = 19;
$chefe = true;
$funcionario = false;

    function verificarAcesso($idade, $chefe) {
        if($idade >= 18 && $chefe == true) {
            echo "Acesso autorizado.";
        } elseif($idade < 18 && $chefe == true) {
            echo "Acesso negado. Você não possui a idade necessária para acessar este local.";
        } else {
            echo "Acesso negado.";
        }
    }
?>