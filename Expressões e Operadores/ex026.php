<?php 
    $speedCar = 40;
    
        if(is_int($speedCar) && $speedCar < 40) {
            echo "Velocidade correta!";

        } if($speedCar == 40) {
            echo "Tome cuidado!";

        } else if($speedCar > 40) {
            echo "Você foi multado, preste mais atenção!";

        }
?>