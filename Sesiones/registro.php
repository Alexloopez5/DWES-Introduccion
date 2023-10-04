<?php 
    require('con.php');
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes 
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    $errores = [];
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
        if(empty($_POST['username'])){
            $errores[] = "El username es requerido";
        }

        if(empty($_POST['email'])){
            $errores[] = "El email es requerido";
        }

        if(empty($_POST['password'])){
            $errores[] = "La password es requerida";
        }
        
        if(empty($_POST['confirmpassword'])){
            $errores[] = "La password tienes que confirmarla";
        }

        if(empty($errores)){
            $username = filtrado($_POST);
        }
    }
?>