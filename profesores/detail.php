<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_profeseleccionado($connect, $id);
$profeseleccionado = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de profesor - escuela</title>
</head>
<body>
<center><h1>Detalle del Profesor: <small><?php echo $profeseleccionado['apellido']." ".$profeseleccionado['nombre'] ?><a href="index.php"><p style="text-align:center">Volver al listado de alumnos</p></a></small></h1></center>
<center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo electrónico</th>
                <th>Estatus</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><?php echo $profeseleccionado['id']?></td>
                <td><?php echo $profeseleccionado['nombre']?></td>
                <td><?php echo $profeseleccionado['apellido']?></td>
                <td><?php echo $profeseleccionado['telefono']?></td>
                <td><?php echo $profeseleccionado['correo']?></td>
                <td><?php echo $profeseleccionado['estatus']?></td>
            </tr>


        </tbody>
    </table>
</center>
</body>
</html>