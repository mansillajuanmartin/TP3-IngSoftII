<?php
    $precio1 = $_GET ['precio1'];
    $precio2 = $_GET ['precio2'];
    $precio3 = $_GET ['precio3'];
    $precio4 = $_GET ['precio4'];
    $precio5 = $_GET ['precio5'];
    $Total = ($precio1+$precio2+$precio3+$precio4+$precio5);
    $media = ($Total)/5;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Total y Precio medio de un producto</title>
    </head>
    <body>
    <?php
    echo "<p> DATOS RECIBIDOS </p>";
    echo "<p> Precio del producto del local 1: ". $precio1. " Pesos. </p>";
    echo "<p> Precio del producto del local 2: ". $precio2. " Pesos. </p>";
    echo "<p> Precio del producto del local 3: ". $precio3. " Pesos. </p>";
    echo "<p> Precio del producto del local 4: ". $precio3. " Pesos. </p>";
    echo "<p> Precio del producto del local 5: ". $precio5. " Pesos. </p>";
    echo "<p> Precio Total es: ". $Total. " Pesos. </p>";
    echo "<p> Precio medio del producto es: ". $media. " Pesos. </p>";
    ?>
    </body>
</html>