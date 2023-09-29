<?php
    header('Content-Type: image/png');
    $letMeIn = $_GET['letMeIn'] ?? 0;
    $imagen = $_GET['img'];

    if($letMeIn == 1 && file_exists("/home/alumno/DWES/Imagenes/" . $imagen)){
        imagepng(imagecreatefrompng("/home/alumno/DWES/Imagenes/" . $imagen));
    }elseif ($letMeIn == 0){
        http_response_code(401);
        imagepng(imagecreatefrompng("/home/alumno/DWES/Imagenes/prohibido.png"));
    }elseif ($letMeIn == 1 && !file_exists("/home/alumno/DWES/Imagenes/". $imagen)){
        http_response_code(404);
        imagepng(imagecreatefrompng("/home/alumno/DWES/Imagenes/prohibido.png"));
    }
?> 