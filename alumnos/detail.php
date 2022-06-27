<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_alumnoseleccionado($connect, $id);
$alumnoseleccionado = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de alumno - escuela</title>
</head>
<body>
<center><h1>Detalle del Alumno: <small><?php echo $alumnoseleccionado['apellidos']." ".$alumnoseleccionado['nombre'] ?><a href="index.php"><p style="text-align:center">Volver al listado de alumnos</p></a></small></h1></center>
<center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo electrónico</th>
                <th>Licenciatura</th>
                <th>Cuatrimestre</th>
                <th>Estatus</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><?php echo $alumnoseleccionado['id']?></td>
                <td><?php echo $alumnoseleccionado['nombre']?></td>
                <td><?php echo $alumnoseleccionado['apellidos']?></td>
                <td><?php echo $alumnoseleccionado['telefono']?></td>
                <td><?php echo $alumnoseleccionado['correo']?></td>
                <td><?php echo $alumnoseleccionado['licenciatura']?></td>
                <td><?php echo $alumnoseleccionado['cuatrimestre']?></td>
                <td><?php echo $alumnoseleccionado['estatus']?></td>
            </tr>


        </tbody>
    </table>
</center>
</body>
</html>