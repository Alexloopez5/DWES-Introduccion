<?php 
   require('con.php');
   require('alumno.php');

   $registros = $pdo->exec('DELETE FROM alumno
                           WHERE Nombre="Paco"');
?>