<?php
require_once("../lib/functions.php");

if(isset($_POST['submit'])){
    if(strlen($_POST['nombre'])>=1
    && strlen($_POST['licenciatura'])>=1
    && strlen($_POST['cuatrimestre'])>=1)
    {
        $nombre = $_POST['nombre'];
        $licenciatura = $_POST['licenciatura'];
        $cuatrimestre = $_POST['cuatrimestre'];
        $consulta="INSERT INTO materias(nombre,licenciatura,cuatrimestre) values('$nombre','$licenciatura','$cuatrimestre')";
        $resultado = mysqli_query($connect, $consulta);
        if ($resultado){
            echo "<p>Materia registrada</p>";
            header("Location:index.php");
            }
    }
}else{
    echo "<p>Debe rellenar todos los campos antes de continuar</p>";
}
?>
