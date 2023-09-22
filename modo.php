<?php 
    $modo = $_GET["modo"] ?? ($_COOKIE["modo"] ?? "claro");
    setcookie("modo", $modo, time() + 30 * 24 * 60 * 60);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Claro o Oscuro</title>
    <style>
        body.claro{
            background-color: white;
        }
        body.oscuro{
            background-color:grey;
            color: white;
        }
    </style>
</head>
<body class="<?=$modo?>">
    <a href="modo.php?modo=oscuro">Oscuro</a>
    <a href="modo.php?modo=claro">Claro</a>
</body>
</html>