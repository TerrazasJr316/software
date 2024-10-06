<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosesar datos del formulario</title>
</head>

<body>
    <?php
    #Recivir los datos
    $nombre = $_POST["txtName"];

    echo "Tu nombre es $nombre";
    ?>
</body>

</html>