<?php
    $primerValor = $_GET['x'] ?? 3;
    $segundoValor = $_GET['y'] ?? 2;

    echo "El resultado es ", $primerValor * $segundoValor;
?>