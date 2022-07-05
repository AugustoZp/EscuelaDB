<?php
require_once("../lib/functions.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estatus = $_POST['estatus'];

insertar_profesor($nombre, $apellido, $telefono, $correo, $estatus);

header("Location: index.php");
?>