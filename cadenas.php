<?php
    //Funcion trim
    $nombreRecibido = $_GET['x'] ?? "Alex Lopez";
    $prefijo = $_GET['y'] ?? 1;

    $nombreFormateado = trim($nombreRecibido,"/");
    echo $nombreFormateado;
    echo "<br>";
    //Funcion de longitud
    $longParametro = strlen($nombreFormateado);
    echo $longParametro;
    echo "<br>";
    //Funcion de mayusculas
    echo strtoupper($nombreFormateado);
    echo "<br>";
    //Funcion de minusculas
    echo strtolower($nombreFormateado);
    echo "<br>";
    //Comprobar prefijo
    $compruebaPrefijo = strpos($nombreFormateado,$prefijo);
    if($compruebaPrefijo === false){
        echo "No empieza por el prefijo pasado";
    }else{
        echo "Si que empieza por el prefijo pasado";
    }
    echo "<br>";
    //Mostrar numero de veces de la letra a
    echo substr_count(strtolower($nombreFormateado),'a');
    echo "<br>";
    //Mostrar la posicion de la primera a
    $indiceLetra = stripos($nombreFormateado, 'a');
    if($indiceLetra === false){
        echo "No hay ninguna letra 'a'";
    }else{
        echo $indiceLetra;
    }
    echo "<br>";
    //Mostrar el nombre sustituyendo la letra o
    $letras = array("o","O");
    $nombreCambiado = str_ireplace($letras,"0",$nombreFormateado);
    echo $nombreCambiado;
    echo "<br>";
    //Mostrar partes de la URL
    $url = 'http://username:password@hostname:9090/path?arg=value';
    echo parse_url($url, PHP_URL_SCHEME);
    echo "<br>";
    echo parse_url($url, PHP_URL_USER);
    echo "<br>";
    echo parse_url($url, PHP_URL_PATH);
    echo "<br>";
    echo parse_url($url, PHP_URL_QUERY);
    echo "<br>";

?>