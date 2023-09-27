<?php 
    $estaRegistrado = $_GET['dejameEntrar'] ?? 0;
    if($estaRegistrado == 1){
        print "Bienvenido";
    }else{
        header('Location:login.php');
        exit();
    }
?>