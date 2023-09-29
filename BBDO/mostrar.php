<?php 
    require('alumno.php');
    require('con.php');

    $id = $_GET['ID'];
    $resultado = $pdo-> prepare('SELECT * FROM alumno WHERE ?');
    $resultado -> bindParam(1,$id);
    $resultado -> execute();
    while($registro = $resultado -> fetch()){
        echo "Nombre ".$registro['Nombre'].": ";
        echo $registro['CorreoElectronico']."<br/>";
    }
?>