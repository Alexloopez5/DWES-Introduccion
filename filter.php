<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $contactos = array(
            array("codigo" => 1, "nombre" => "Juan Pérez",
            "telefono" => "966112233", "email" => "juanp@gmail.com"),
            array("codigo" => 2, "nombre" => "Ana López",
            "telefono" => "965667788", "email" => "anita@hotmail.com"),
            array("codigo" => 3, "nombre" => "Mario Montero",
            "telefono" => "965929190", "email" => "mario.mont@gmail.com"),
            array("codigo" => 4, "nombre" => "Laura Martínez",
            "telefono" => "611223344", "email" => "lm2000@gmail.com"),
            array("codigo" => 5, "nombre" => "Nora Jover",
            "telefono" => "638765432", "email" => "norajover@hotmail.com"),
        );
        
        $filtraPor = strtolower($_GET["filtrarPor"] ?? "1");
        $filtrados = array_filter($contactos,
            function($contacto) use ($filtraPor){
                return strpos(strtolower($contacto["email"]),$filtraPor) !== FALSE;
            }
        );
        print_r($filtrados);
    ?>
</body>
</html>