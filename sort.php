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
        $edades = array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
        print "Nombre Ascendente<br>";
        ksort($edades);
        foreach ($edades as $nombre => $id){
            print "$nombre = $id <br>";
        }
        print "<br>";
        print "Edad Ascendente<br>";
        arsort($edades);
        foreach ($edades as $nombre => $id){
            print "$nombre = $id <br>";
        }
        print "<br>";
        print "Nombre Descendente<br>";
        krsort($edades);
        foreach ($edades as $nombre => $id){
            print "$nombre = $id <br>";
        }
        print "<br>";
        print "Edad Descendente<br>";
        asort($edades);
        foreach ($edades as $nombre => $id){
            print "$nombre = $id <br>";
        }
    ?>
</body>
</html>