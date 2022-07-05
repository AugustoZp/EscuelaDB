<?php
require_once("connect.php");

//FUNCIONES DE ALUMNOS//
function get_all_alumnos($connect){
$consulta="SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//FUNCIONES DE ALUMNO SELECCIONADO//
function get_alumnoseleccionado($connect, $id){
$consulta="SELECT * FROM alumnos WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

////////////////////////

//FUNCIONES DE PROFESORES//
function get_all_profesores($connect){
$consulta="SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//FUNCIONES DE PROFESOR SELECCIONADO//
function get_profeseleccionado($connect, $id){
$consulta="SELECT * FROM profesores WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

////////////////////////

//FUNCIONES DE MATERIAS//
function get_all_materias($connect){
$consulta="SELECT * FROM materias";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//FUNCIONES DE MATERIA SELECCIONADA//
function get_materiaseleccionada($connect, $id){
$consulta="SELECT * FROM materias WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

////////////////////////

//FUNCIONES DE INSERTAR NUEVO ALUMNO//
function insertar_alumnos($nombre, $apellidos, $telefono, $correo, $licenciatura, $cuatrimestre, $estatus){
global $connect;
$consulta="INSERT INTO alumnos(nombre,apellidos,telefono,correo,licenciatura,cuatrimestre,estatus) values('$nombre','$apellidos','$telefono','$correo','$licenciatura','$cuatrimestre','$estatus')";
$resultado = mysqli_query($connect, $consulta);
//return $resultado;
}

//FUNCIONES DE INSERTAR NUEVO PROFESOR//
function insertar_profesor($nombre, $apellido, $telefono, $correo, $estatus){
    global $connect;
    $consulta="INSERT INTO profesores(nombre,apellido,telefono,correo,estatus) values('$nombre','$apellido','$telefono','$correo','$estatus')";
    $resultado = mysqli_query($connect, $consulta);
    //return $resultado;
    }

//FUNCIONES DE INSERTAR NUEVA MATERIA//
function insertar_materia($nombre, $licenciatura,$cuatrimestre){
    global $connect;
    $consulta="INSERT INTO materias(nombre,licenciatura,cuatrimestre) values('$nombre','$licenciatura','$cuatrimestre')";
    $resultado = mysqli_query($connect, $consulta);
    //return $resultado;
    }
?>