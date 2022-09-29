<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nome" id="">
        <input type="date" name="nascimento" id="">
        <input type="submit" value="Ok">
    </form>
</body>
</html>

<?php 

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        
        echo "Nome do campo: " . $key . "<br>";

        echo "Valor do campo: " . $value;

        echo "<hr>";

    }
}