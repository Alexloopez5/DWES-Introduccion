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
        $arrayCadenas = ["Seguro", "que", "apruebo", "esta", "asignatura"];
        $nuevoArray = [];
        for($i = 0; $i < count($arrayCadenas)-1; $i++){
            $parte1 = array_slice($arrayCadenas,0,$i+1);
            $parte1String = implode(" ",$parte1);
            $parte2 = array_slice($arrayCadenas,$i+1);
            $parte2String = implode(" ",$parte2);
            $nuevoArray[] = [$parte1String,$parte2String];
        }
        print_r($nuevoArray);
    ?>
</body>
</html>