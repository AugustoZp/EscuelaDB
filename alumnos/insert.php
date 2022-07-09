<?php
require_once("../lib/functions.php");

if(isset($_POST['submit'])){
    if(strlen($_POST['nombre'])>=1
    && strlen($_POST['apellidos'])>=1
    && strlen($_POST['telefono'])>=1
    && strlen($_POST['correo'])>=1
    && strlen($_POST['licenciatura'])>=1
    && strlen($_POST['cuatrimestre'])>=1
    && strlen($_POST['estatus'])>=1)
    {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $licenciatura = $_POST['licenciatura'];
        $cuatrimestre = $_POST['cuatrimestre'];
        $estatus = $_POST['estatus'];
        $consulta="INSERT INTO alumnos(nombre,apellidos,telefono,correo,licenciatura,cuatrimestre,estatus) values('$nombre','$apellidos','$telefono','$correo','$licenciatura','$cuatrimestre','$estatus')";
        $resultado = mysqli_query($connect, $consulta);
        if ($resultado){
            echo "<p>Usuario registrado</p>";
            header("Location:index.php");
            }
    }
}else{
    echo "<p>Debe rellenar todos los campos antes de continuar</p>";
}
?>
