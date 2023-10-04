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

        if(empty($_POST['password'])){
            $errores[] = "La password es requerida";
        }

        if(empty($errores)){
            $username = filtrado($_POST['username']);
            $password = filtrado($_POST['password']);
            $resultado = $pdo -> prepare('SELECT ID FROM users WHERE username = ? AND password = ?');
            $resultado -> bindParam(1,$username);
            $resultado -> bindParam(2,$password);
            $resultado -> execute();
            while($registro = $resultado -> fetch()){
                echo "ID: ".$registro['ID']."<br>";
            }
            echo "Username: " . filtrado($_POST['username']) . "<br>";
            echo "Password: " . filtrado($_POST['password']) . "<br>";
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