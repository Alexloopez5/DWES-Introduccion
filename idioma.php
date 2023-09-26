<?php
    $idiomas = [
        'en' => 'This is my webpage',
        'es' => 'Esta es mi pagina web'
    ];
    $idiomaPredeterminado = 'en';
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
        $idiomaPrimero = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        print $idiomas[$idiomaPrimero];
    }else{
        print $idiomas[$idiomaPredeterminado];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    
</body>
</html>