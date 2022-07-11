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
    <title>Alumnos - escuela</title>
</head>

<body>
    <center><h1>Editar datos de alumno: <small><?php echo $alumnoseleccionado['apellidos']." ".$alumnoseleccionado['nombre'] ?><a href="index.php"><h4 style="text-align:center">Volver al listado de alumnos</h4></a></small></h1></center>
<center>
    <style>
    p {color:red;
       font-weight: bolder;
      }
    </style>

        <form action="update_query.php" method="POST"style="background-color:#E6E6FA; width:25%; padding:1%;">

              <div class="elemento">
                <label for="nombre">Nombre:</label><br><br>
                <input type="text" name="nombre" value="<?php echo $alumnoseleccionado['nombre']; ?>"/>
                <input type="hidden" name="id" value="<?php echo $alumnoseleccionado['id']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="apellidos">Apellidos:</label><br><br>
                  <input type="text" name="apellidos" value="<?php echo $alumnoseleccionado['apellidos']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="telefono">Teléfono:</label><br><br>
                <input type="text" name="telefono" value="<?php echo $alumnoseleccionado['telefono']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="correo">Correo electrónico:</label><br><br>
                <input type="text" name="correo" value="<?php echo $alumnoseleccionado['correo']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="licenciatura">Licenciatura:</label><br><br>
                <input type="text" name="licenciatura" value="<?php echo $alumnoseleccionado['licenciatura']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="cuatrimestre">cuatrimestre:</label><br><br>
                <input type="text" name="cuatrimestre" value="<?php echo $alumnoseleccionado['cuatrimestre']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="estatus">estatus:</label><br><br>
                <input type="text" name="estatus" value="<?php echo $alumnoseleccionado['estatus']; ?>"/>
              </div>

              <br><br>
              <button type="submit" name="submit">ACTUALIZAR DATOS</button>
        </form>

</center>
</body>
</html>