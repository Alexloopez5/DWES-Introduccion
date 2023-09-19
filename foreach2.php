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
        $colores = array('blanco'=>'blanco.html','verde'=>'verde.hmtl','rojo'=>'rojo.html');
    ?>
    <ul>
        <?php foreach($colores as $color => $link): ?>
            <li><a href="<?=$link?>"><?=$color?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>