<?php
require_once("../lib/functions.php");
$materias = get_all_materias($connect);

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias - escuela</title>
</head>
<body>
<center><h1>Materias - Universidad UNID<small>
    <a href="insert.php"><p style="text-align:center">Crear materia</p>
    <a href="../index.php"><p style="text-align:center">MENÚ</p></a></a></small></h1>
</center>
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
            <?php
            while($fila = mysqli_fetch_array($materias))
            {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['licenciatura']?></td>
                <td><?php echo $fila['cuatrimestre']?></td>

                <td><a href=detail.php?id=<?php echo $fila['id'] ?>>Detalles</a></td>
                <td><a href=#>Editar</a></td>
                <td><a href=#>Eliminar</a></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</center>
</body>
</html>