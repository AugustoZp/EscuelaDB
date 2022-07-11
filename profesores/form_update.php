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
    <title>Profesores - escuela</title>
</head>

<body>
<center><h1>Editar datos del profesor: <small><?php echo $profeseleccionado['apellido']." ".$profeseleccionado['nombre'] ?><a href="index.php"><h4 style="text-align:center">Volver al listado de alumnos</h4></a></small></h1></center>
<center>
    <style>
    p {color:red;
       font-weight: bolder;
      }
    </style>

        <form action="update_query.php" method="POST"style="background-color:#E6E6FA; width:25%; padding:1%;">

              <div class="elemento">
                <label for="nombre">Nombre:</label><br><br>
                <input type="text" name="nombre" value="<?php echo $profeseleccionado['nombre']; ?>"/>
                <input type="hidden" name="id" value="<?php echo $profeseleccionado['id']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="apellido">Apellidos:</label><br><br>
                  <input type="text" name="apellido" value="<?php echo $profeseleccionado['apellido']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="telefono">Teléfono:</label><br><br>
                <input type="text" name="telefono" value="<?php echo $profeseleccionado['telefono']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="correo">Correo electrónico:</label><br><br>
                <input type="text" name="correo" value="<?php echo $profeseleccionado['correo']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="estatus">estatus:</label><br><br>
                <input type="text" name="estatus" value="<?php echo $profeseleccionado['estatus']; ?>"/>
              </div>

              <br><br>
              <button type="submit" name="submit">ACTUALIZAR DATOS</button>
        </form>

</center>
</body>
</html>