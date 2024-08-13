<?php 
    function index($numero) {
        if ($numero % 2 === 0) {
            echo "$numero é par <br>";
        } else {
            echo "$numero é impar <br>"; 
        }
    }

    index(20); // 20 é par 
    index(15); // 15 é impar
    index(2534);
    index(5876);
    index(2743);
    index(14378908970132487);
    index(19340984302);

?>