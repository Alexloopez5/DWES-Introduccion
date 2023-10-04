<?php 
    require('alumno.php');
    require('con.php');
    $Nombre = $_GET['Nombre'];
    $NumeroDeEstudiante = $_GET['NumeroDeEstudiante'];
    $FechaDeNacimiento = $_GET['FechaDeNacimiento'];
    $CorreoElectronico = $_GET['CorreoElectronico'];

    $pdoSt = $pdo -> prepare('INSERT INTO alumno (Nombre, NumeroDeEstudiante, FechaDeNacimiento, CorreoElectronico) VALUES (?,?,?,?)');
    $pdoSt-> bindParam(1,$Nombre);
    $pdoSt-> bindParam(2,$NumeroDeEstudiante);
    $pdoSt-> bindParam(3,$FechaDeNacimiento);
    $pdoSt-> bindParam(4,$CorreoElectronico);
    $pdoSt-> execute();
    echo "Se ha insertado 1 registro";
?>