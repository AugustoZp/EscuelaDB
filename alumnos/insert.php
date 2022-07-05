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
        <h1>Crear alumno<small><a href="index.php"><h4 style="text-align:center">Volver al listado de alumnos</h4></a></small></h1>
    </center>
<center>
    <style>
    p {color:red;
       font-weight: bolder;
      }
    </style>

        <form action="update.php" method="POST"style="background-color:#E6E6FA; width:25%; padding:1%;">
              <div class="elemento">
                <label for="nombre">Nombre:</label><br><br>
                <input type="text" name="nombre"/>
              </div>

              <div class="elemento">
              <br><label for="apellidos">Apellidos:</label><br><br>
                  <input type="text" name="apellidos"/>
              </div>

              <div class="elemento">
              <br><label for="telefono">Teléfono:</label><br><br>
                <input type="text" name="telefono"/>
              </div>

              <div class="elemento">
              <br><label for="correo">Correo electrónico:</label><br><br>
                <input type="text" name="correo"/>
              </div>

              <div class="elemento">
              <br><label for="licenciatura">Licenciatura:</label><br><br>
                <input type="text" name="licenciatura"/>
              </div>

              <div class="elemento">
              <br><label for="cuatrimestre">cuatrimestre:</label><br><br>
                <input type="text" name="cuatrimestre"/>
              </div>

              <div class="elemento">
              <br><label for="estatus">estatus:</label><br><br>
                <input type="text" name="estatus"/>
              </div>

              <br><br>
              <button type="submit" name="submit">AÑADIR ALUMNO</button>
        </form>
</center>
</body>
</html>