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
        $planetas = ["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno"];
        $planetasMapeado = array_map('strlen',$planetas);
        print "Maximo: ";
        print(max($planetasMapeado));
        print "<br>";
        print "Minimo: ";
        print(min($planetasMapeado));
        print "<br>";
    ?>
</body>
</html>