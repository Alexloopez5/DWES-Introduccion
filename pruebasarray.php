<?php
    $meteors = array(
        'Hoba' => 60000000,
        'Cape York' => 58200000,
        'Campo del Cielo' => 50000000,
        'Canyon Diablo' => 30000000
    );
    echo "<hr>";
    foreach($meteors as $nombre => $peso){
        echo "$nombre pesa $peso gramos <br>";
    }
?>    