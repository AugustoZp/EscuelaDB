<?php
require_once("../lib/functions.php");
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - escuela</title>
</head>

<body>
    <center>
        <h1>Crear alumno<small><a href="index.php"><p style="text-align:center">Volver al listado de alumnos</p></a></small></h1>
    </center>

    <center>
        <form action="" style="background-color:#E6E6FA; width:25%; padding:1%;">
                <p>Nombre: <input type="text" name="nombre"/></p>
                <p>Apellidos: <input type="text" name="apellido"/></p>
                <p>Teléfono: <input type="text" name="telefono"/></p>
                <p>Correo electrónico: <input type="text" name="correo"/></p>
                <p>Licenciatura: <input type="text" name="lic"/></p>
                <p><input type="submit" value="AÑADIR ALUMNO"/></p>
        </form>
    </center>
</body>
</html>