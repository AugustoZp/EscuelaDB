<?php
require_once("../lib/functions.php");

if(isset($_POST['submit'])){
    if(strlen($_POST['nombre'])>=1
    && strlen($_POST['apellido'])>=1
    && strlen($_POST['telefono'])>=1
    && strlen($_POST['correo'])>=1
    && strlen($_POST['estatus'])>=1)
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $estatus = $_POST['estatus'];
        $consulta="INSERT INTO profesores(nombre,apellido,telefono,correo,estatus) values('$nombre','$apellido','$telefono','$correo','$estatus')";
        $resultado = mysqli_query($connect, $consulta);
        if ($resultado){
            echo "<p>Profesor registrado</p>";
            header("Location:index.php");
            }
    }
}else{
    echo "<p>Debe rellenar todos los campos antes de continuar</p>";
}
?>
