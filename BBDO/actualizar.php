<?php 
    require('con.php');
    require('alumno.php');
    $id = $_GET['ID'];
    $nombre = $_GET['Nombre'];

    $registros = $pdo->prepare('UPDATE alumno SET Nombre= ? WHERE ID = ?');
    $registros->bindParam(1,$nombre);
    $registros->bindParam(2,$id);

    $registros->execute();
    echo "Se ha actualizado 1 registro";
    
?>