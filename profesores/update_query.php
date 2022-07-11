<?php
require_once("../lib/functions.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estatus = $_POST['estatus'];
$id = $_POST['id'];

update_profesor($nombre, $apellido, $telefono, $correo, $estatus, $id);

header("Location:index.php")
?>