<?php
    $arr = array(1, "batata", false, "anime", 7.2, true, "dorama", "mangá", 0, 9.4);

    $x = count($arr);
    $y = 0;

    while($y < $x) {
        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;
    }
?>