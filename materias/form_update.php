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
    <title>Materia - escuela</title>
</head>

<body>
<center><h1>Editar datos de la materia: <small><?php echo $materiaseleccionada['nombre']." De la licenciatura: ".$materiaseleccionada['licenciatura'] ?><a href="index.php"><h4 style="text-align:center">Volver al listado de materias</h4></a></small></h1></center>
<center>
    <style>
    p {color:red;
       font-weight: bolder;
      }
    </style>

        <form action="update_query.php" method="POST"style="background-color:#E6E6FA; width:25%; padding:1%;">

              <div class="elemento">
                <label for="nombre">Nombre:</label><br><br>
                <input type="text" name="nombre" value="<?php echo $materiaseleccionada['nombre']; ?>"/>
                <input type="hidden" name="id" value="<?php echo $materiaseleccionada['id']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="licenciatura">Licenciatura:</label><br><br>
                <input type="text" name="licenciatura" value="<?php echo $materiaseleccionada['licenciatura']; ?>"/>
              </div>

              <div class="elemento">
              <br><label for="cuatrimestre">cuatrimestre:</label><br><br>
                <input type="text" name="cuatrimestre" value="<?php echo $materiaseleccionada['cuatrimestre']; ?>"/>
              </div>

              <br><br>
              <button type="submit" name="submit">ACTUALIZAR DATOS</button>
        </form>

</center>
</body>
</html>