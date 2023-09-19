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
        //Crear una array con nombres
        $nombres = array('Juan','Pepe','Pedro','Alex','Maria','Roberto');
        //Imprimir la longitud de la array
        $longitud = count($nombres);
        echo $longitud;
        echo "<br>";
        //Crear una cadena con el array separado por un espacio
        $cadenaArray = implode(" ",$nombres);
        echo $cadenaArray;
        echo "<br>";
        //Mostrar ordenado alfabeticamente
        asort($nombres);
        foreach ($nombres as $nombre) {
            echo "$nombre"." ";
        }
        echo "<br>";
        //Mostrar en el orden inverso
        $reversed = array_reverse($nombres);
        print_r($reversed);
        print "<br>";
        //Muestra el indice de mi nombre
        print array_search('Alex',$nombres);
        print "<br>";
        //Crear un array de alumnos que contenga otro array con id nombre y edad
        $alumnos = [
            [
                'id' => 1,
                'nombre' => 'Sara',
                'edad' => 25
            ],
            [
                'id' => 2,
                'nombre' => 'Pedro',
                'edad' => 23
            ],
            [
                'id' => 3,
                'nombre' => 'Juan',
                'edad' => 20
            ],
        ];
    ?>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>edad</td>
        </tr>
        <?php foreach($alumnos as $element): ?>
        <tr>
            <td><?= $element['id']?></td>
            <td><?= $element['nombre']?></td>
            <td><?= $element['edad']?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <br/>
    <?php 
        //Utilizo la funcion array_column
        $nombresAlumnos = array_column($alumnos,'nombre');
        print_r($nombresAlumnos);
        print "<br>";
        $numeros = array(1,2,3,4,5,6,7,8,9,10);
        print array_sum($numeros);
    ?>
</body>
</html>
