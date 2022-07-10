<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_alumnoseleccionado($connect, $id);
$alumnoseleccionado = mysqli_fetch_array($resultado);

eliminar_alumnos($id);
header("Location:index.php");
?>