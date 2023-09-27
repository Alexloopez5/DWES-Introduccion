<?php 
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
    $id = $_GET['id'];
    if (isset($id) && isset($productos[$id])) {
        print $productos[$id];
    } else {
        http_response_code(404);
        print "Ese producto no existe";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>