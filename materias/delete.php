<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materiaseleccionada($connect, $id);
$materiaseleccionada = mysqli_fetch_array($resultado);

eliminar_materias($id);
header("Location:index.php");
?>