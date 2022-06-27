<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materiaseleccionada($connect, $id);
$materiaseleccionada = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de materia - escuela</title>
</head>
<body>
<center><h1>Detalle de la materia: <small><?php echo $materiaseleccionada['nombre']." De la licenciatura: ".$materiaseleccionada['licenciatura'] ?><a href="index.php"><p style="text-align:center">Volver al listado de materias</p></a></small></h1></center>
<center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Licenciatura</th>
                <th>Cuatrimestre</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><?php echo $materiaseleccionada['id']?></td>
                <td><?php echo $materiaseleccionada['nombre']?></td>
                <td><?php echo $materiaseleccionada['licenciatura']?></td>
                <td><?php echo $materiaseleccionada['cuatrimestre']?></td>
            </tr>


        </tbody>
    </table>
</center>
</body>
</html>