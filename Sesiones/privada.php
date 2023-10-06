<?php 
session_start();
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Para acceder a esta página, debes iniciar sesión primero";
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
    hola <?= filtrado($_SESSION["username"]) ?><br>
    <a href="logout.php">Logout</a>
</body>
</html>