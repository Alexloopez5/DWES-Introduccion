<?php 
    require('con.php');
    require('alumno.php');

    $registros = $pdo->exec('UPDATE alumno
                            SET Nombre="Paco"
                            WHERE Nombre="Alex"');
?>