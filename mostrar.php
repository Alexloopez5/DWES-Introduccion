<?php 
    require('alumno.php');
    require('con.php');

    $resultado = $pdo-> query('SELECT Nombre, CorreoElectronico FROM alumno');
    while($registro = $resultado -> fetch()){
        echo "Nombre ".$registro['Nombre'].": ";
        echo $registro['CorreoElectronico']."<br/>";
    }

?>