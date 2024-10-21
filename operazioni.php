<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];

        if(empty($numero1) || empty($numero2)){
            echo "<p style='color: red'>Errore: almeno uno dei due numeri è vuoto</p>";
            echo "<a href='/numeri'>Pagina precedente</a>";
        }
    ?>
</body>
</html>