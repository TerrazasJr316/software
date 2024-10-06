<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <section>
        <h1>Formularios con PHP</h1>
        <form action="prosesar_form.php" method="post">
            <!-- action sirve para en  donde se van a prosesar los datos-->
            <!-- get envia los datos a travez de una URL-->
            <!-- post envia los datos ocultos (encriptados)-->
            <input type="text" placeholder="Nombre" name="txtName">
            <input type="number" placeholder="Edad" name="txtAge">
            <select size="1" name="selectAsignature" id="">
                <option>--Seleccione Carrera--</option>
                <option value="isic">Ing. Sistemas</option>
                <option value="im">Ing. Mecatronica</option>
                <option value="il">Ing. Logistíca</option>
                <option value="ii">Ing. Industrial</option>
                <option value="ic">Ing. Civil</option>
            </select>
            <button>Registrar</button>
            <button>Nuevo</button>
        </form>
    </section>
    <?php

    ?>
</body>

</html>