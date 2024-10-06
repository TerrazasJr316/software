<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera aplicacion con PHP</title>
</head>

<body>
    <h1>Soy un encabezado de HTML</h1>
    <?php
    #todo esto es un Script en PHP
    //También es un comentario de una linea
    /*Un comentario
        en multiples
        lineas
        */

    # laas variables simpre comienzan con $ 
    # PHP no es fuertemente tipado, el tipo de dato se crea con la asignación
    $nombre = "TESJI";
    $mensaje = "Mi primera aplicación en PHP";

    echo "<h2>Hola Mundo desde PHP</2>";

    echo "<h3> Bienvenido $nombre </h3> <h4>$mensaje</h4>";
    ?>

    <ul>
        <a href="pagina2.php">
            <li>Formularios</li>
        </a>
    </ul>

</body>

</html>