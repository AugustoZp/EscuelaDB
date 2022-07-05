<?php
require_once("../lib/functions.php");


$nombre = $_POST['nombre'];
$licenciatura = $_POST['licenciatura'];
$cuatrimestre = $_POST['cuatrimestre'];

insertar_materia($nombre, $licenciatura,$cuatrimestre);

header("Location: index.php");
?>