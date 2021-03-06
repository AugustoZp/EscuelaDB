<?php
require_once("../lib/functions.php");
$alumnos = get_all_alumnos($connect);
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
<center><h1>Alumnos - Universidad UNID<small>
    <a href="form.php"><p style="text-align:center">Crear alumno</p></a>
    <a href="../index.php"><p style="text-align:center">MENÚ</p></a></small></h1>
</center>
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
            <?php
            while($fila = mysqli_fetch_array($alumnos))
            {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['apellidos']?></td>
                <td><?php echo $fila['telefono']?></td>
                <td><?php echo $fila['correo']?></td>
                <td><?php echo $fila['licenciatura']?></td>
                <td><?php echo $fila['cuatrimestre']?></td>
                <td><?php echo $fila['estatus']?></td>

                <td><a href=detail.php?id=<?php echo $fila['id'] ?>>Detalles</a></td>
                <td><a href=form_update.php?id=<?php echo $fila['id'] ?>>Editar</a></td>
                <td><a href=delete.php?id=<?php echo $fila['id'] ?>>Eliminar</a></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    </center>
</body>
</html>