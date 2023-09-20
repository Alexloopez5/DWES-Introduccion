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
        
        function rand_passwd($upper,$lower,$numeric,$other){
            $caracteresMinuscula = array();
            for($i = 0; $i < $lower;$i++){
                array_push($caracteresMinuscula,chr(rand(97,122)));
            }

            for($i = 0; $i < $upper;$i++){
                array_push($caracteresMinuscula,chr(rand(65,90)));
            }

            for($i = 0; $i < $numeric;$i++){
                array_push($caracteresMinuscula,chr(rand(48,57)));
            }

            for($i = 0; $i < $other;$i++){
                array_push($caracteresMinuscula,chr(rand(33,47)));
            }

            shuffle($caracteresMinuscula);
            return $caracteresMinuscula;
        }
        $arrayPaswd = rand_passwd(1,5,3,2);
        foreach ($arrayPaswd as $caracter){
            print "$caracter<br>";
        }
    ?>
</body>
</html>