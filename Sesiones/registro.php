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

        if(strcmp($_POST['password'],$_POST['confirmpassword']) != 0){
            $errores[] = "Las contraseñas no coinciden";
        }

        if(empty($errores)){
            $username = $_POST['username'];
            $email = filtrado($_POST['email']);
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            
            $resultado = $pdo -> prepare('INSERT INTO users (username, email, password) VALUES (?,?,?)');
            $resultado -> bindParam(1,$username);
            $resultado -> bindParam(2,$email);
            $resultado -> bindParam(3,$password);
            $resultado -> execute();

            echo "Registrado correctamente";
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
    <title>Registro</title>
    <link rel="stylesheet" href="styles_registro.css">
</head>
<body>
    <form action="registro.php" method="post">
        Nombre de usuari@: <input type="text" name="username"><br>
        Correo electrónico: <input type="email" name="email"><br>
        Contraseña: <input type="password" name="password"><br>
        Confirma la contraseña: <input type="password" name="confirmpassword"><br>
        <input type="submit" name="submit" value="Regístrarse"><br>
    </form>
    <p>¿Ya eres miembro? <a href="login.php">Inicia Sesión</a></p>
</body>
</html>