<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td{
            border: solid black 2px;
        }

        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];

        if(empty($numero1) || empty($numero2)){
            echo "<p style='color: red'>Errore: almeno uno dei due numeri è vuoto</p>";
            echo "<a href='/numeri'>Pagina precedente</a>";
        }else{
            $somma = $numero1 + $numero2;
            $sottrazione = $numero1 - $numero2;
            $moltiplicazione = $numero1 * $numero2;
            $divisione = $numero1 / $numero2;
          echo "<table>";
            echo "<tr>";
                echo "<th>Operazioni</th>";
                echo "<th>Risultato</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Somma</td>";
                echo "<td>$somma</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Sottrazione</td>";
                echo "<td>$sottrazione</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Moltiplicazione</td>";
                echo "<td>$moltiplicazione</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>divisione</td>";
                echo "<td>" . number_format($divisione) . "</td>";
            echo "</tr>";
        echo "</table>";  
        }

        
    ?>
</body>
</html>