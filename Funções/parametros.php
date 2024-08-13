<?php
    function velMaxima($vel) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    }

    velMaxima(250);
    velMaxima(300);
    velMaxima(450);

    $velocidade = 200;

    velMaxima($velocidade);

    // mais um exemplo

    function descreverAnimal($nome, $raca) {
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "Pequeno Cão Holandês");
    descreverAnimal("Pingo", "Poodle");
    descreverAnimal("Yuumi", "Siamês");
?>