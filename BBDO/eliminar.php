<?php 
   require('con.php');
   require('alumno.php');
   $id = $_GET['ID'];

   $registros = $pdo->prepare('DELETE FROM alumno WHERE ID= ?');
   $registros->bindParam(1,$id);
   $registros->execute();
   echo "Se ha eliminado 1 registro";
?>