<?php 
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes 
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }
    $errores = [];
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
        if(empty($_POST["nombre"])){
            $errores[] = "El nombre es requerido";
        }

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
            $errores[] = "No se ha indicado email o el formato no es correcto";
        }

        $directorioSubida = "uploads/";
        $max_file_size = "51200";
        if(isset($_FILES['avatar'])){
            $errores = array();
            $nombreArchivo = $_FILES['avatar']['name'];
            $filesize = $_FILES['avatar']['size'];
            $directorioTemp = $_FILES['avatar']['tmp_name'];
            $tipoArchivo = $_FILES['avatar']['type'];
            $arrayArchivo = pathinfo($nombreArchivo);
            
            // Comprobamos el tamaño del archivo
        
            if($filesize > $max_file_size){
                $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
            }
        
            // Comprobamos y renombramos el nombre del archivo
            $nombreArchivo = $arrayArchivo['filename'];
            $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
            $nombreArchivo = $nombreArchivo . rand(1, 100);
            // Desplazamos el archivo si no hay errores
        
            if(empty($errores)){
                $nombreCompleto = $directorioSubida.$nombreArchivo;
                move_uploaded_file($directorioTemp, $nombreCompleto);
                print "El archivo se ha subido correctamente <br>";
            }
        }
        if(empty($errores)){
            $nombre = filtrado($_POST['nombre']);
            $email = filtrado($_POST['email']);
            $estudios = filtrado($_POST['estudios']);
            $imagen = filtrado($_FILES["avatar"]["name"]);

            foreach($_POST as $datos){
                if($datos == $_POST['nombre']){
                    echo "El nombre es: ".$datos . "<br>";
                }
                if($datos == $_POST['email']){
                    echo "El email es: ".$datos . "<br>";
                }
                if($datos == $_POST['estudios']){
                    echo "Esta estudiando: ".$datos . "<br>";
                }
            }
            echo "El nombre de la imagen es: ". $imagen;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
    <body>    
        <form action="formpost.php" method="POST" enctype="multipart/form-data">
                Nombre: <input type="text" name="nombre"><br>
                Email: <input type="email" name="email"><br>
                Estudios: <select name="estudios">
                    <option value="Secundaria">Secundaria</option>
                    <option value="Bachiller">Bachiller</option>
                    <option value="Grado Superior">Grado Superior</option>
                </select><br>
                Avatar: <input type="file" name="avatar"><br>
                <input type="submit" name="submit" value="Enviar"><br>
        </form>
    </body>
</html>