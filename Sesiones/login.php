<?php 
    require('con.php');
    session_start();
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

        if(empty($_POST['password'])){
            $errores[] = "La password es requerida";
        }

        if(empty($errores)){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $resultado = $pdo -> prepare('SELECT username FROM users WHERE username = ? AND password = ?');
            $resultado -> bindParam(1,$username);
            $resultado -> bindParam(2,$password);
            $resultado -> execute();
            $registro = $resultado -> fetch();
            if($registro){
                $_SESSION["username"] = $registro["username"];
                header("location: privada.php");
            }else{
                echo "Ese usuario o contraseña no son válidos";
            }
        }
        if(isset($errores)){
            echo "<ul>";
            foreach($errores as $error){
                echo "<li>" . $error . "</li>";
            }
            echo "</ul>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <form action="login.php" method="post">
        Username: <input type="text" name="username"><br>
        Contraseña: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Acceder"><br>
    </form>
    <p>¿Todavia no eres miembro? <a href="registro.php">Regístrate</a></p>
</body>
</html>