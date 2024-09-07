<?php 

$arr = [];

for($i = 0; $i <= 100; $i++) {

    array_push($arr, $i);

}

// print($arr);

function arrMaiorQueSete($array) {
    for($j = 0; $j <= count($array); $j++) {

        $arrayRetorno = [];

        if($array[$j] > 7) {

            array_push($arrayRetorno, $array[$j]);

        }
    }

    return $arrayRetorno;

}

$novoArray = arrMaiorQueSete($arr);

print_r($novoArray);

?>