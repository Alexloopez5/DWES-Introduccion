<?php
    $primerValor = 1;

    if(isset($_GET['x'])){
        $primerValor = $_GET['x'];
    }

    $segundoValor = $_GET['y'] ?? 1;
    echo "El resultado es ", $primerValor * $segundoValor;
?>