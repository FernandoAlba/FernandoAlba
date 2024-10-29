<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_001</title>
</head>
<body>
    <table style="border:1px solid black;">
        <tr>
            <th>Tipo</th>
            <th>Ventajas</th>
            <th>Inconvenientes</th>
        </tr>
        <tr>
            <td>A</td>
            <td>Mas rapido</td>
            <td>Mas caro</td>
        </tr>
        <tr>
            <td>B</td>
            <td>Mas barato</td>
            <td>Mas lento</td>
        </tr>
    </table>
</body>
</html>

<?php 
    $edad = 40;
    print($edad);
    
    echo "<br>"; //Imprimo una linea en blanco
    echo "<h1>$edad</h1>";

    $nombre = "Fernando"; //Asignamos Fernando a la variable nombre
    print($nombre);
?>