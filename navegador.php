<?php 
    $navegadorUsado = $_SERVER['HTTP_USER_AGENT'];
    if(strpos($navegadorUsado,'Firefox')){
        print "Estas usando Firefox";
    }else{
        echo '<script>alert("Deberias usar Firefox")</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
    
</body>
</html>