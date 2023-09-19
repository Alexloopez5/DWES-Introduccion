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
        $temperatures = "25,28,21,30,32,29,27,26,24,23,22,31,33,35,20,19,18,17,16,34,36,37,38,15";
        $temperaturas_array = explode(",", $temperatures);
        $media = array_sum($temperaturas_array) / count($temperaturas_array);
        echo "La media es: $media <br>";
        print "Minimas<br>";
        print_r($temperaturas_array);
        print "<br>";
        $media = array_sum($temperaturas_array) / count($temperaturas_array);
        sort($temperaturas_array);
        $minimas = array_slice($temperaturas_array,0,5);
        print "Maximas<br>";
        print_r($minimas);
        $reversed = array_reverse($temperaturas_array);
        $maximas = array_slice($reversed,0,5);
        print_r($maximas);

    ?>
</body>
</html>