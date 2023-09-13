<?php
    echo "<table border=1>";
    $cont = 1;
    for ($n1 = 1; $n1 <= 10; $n1++){
        echo "<tr>";
        for ($n2 = 1; $n2 <= 10; $n2++){
            echo "<td>",$cont, "</td>";
            $cont++;
        }
        echo "</tr>";
    }
    echo "</table>";
?>