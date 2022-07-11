<?php
require_once("../lib/functions.php");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$licenciatura = $_POST['licenciatura'];
$cuatrimestre = $_POST['cuatrimestre'];
$estatus = $_POST['estatus'];
$id = $_POST['id'];

update_alumno($nombre, $apellidos, $telefono, $correo, $licenciatura, $cuatrimestre, $estatus, $id);

header("Location:index.php")
?>