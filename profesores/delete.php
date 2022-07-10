<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_profeseleccionado($connect, $id);
$profeseleccionado = mysqli_fetch_array($resultado);

eliminar_profesores($id);
header("Location:index.php");
?>