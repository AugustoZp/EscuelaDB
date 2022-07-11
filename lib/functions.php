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

////////////////////////////////////////////////

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

////////////////////////////////////////////////

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

////////////////////////////////////////////////

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

////////////////////////////////////////////////

//FUNCIONES DE ACTUALIZAR ALUMNO//
Function update_alumno($nombre, $apellidos, $telefono, $correo, $licenciatura, $cuatrimestre, $estatus, $id){
    global $connect;
    $consulta= "UPDATE alumnos SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', correo='$correo', licenciatura='$licenciatura', cuatrimestre='$cuatrimestre', estatus='$estatus' WHERE  id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

//FUNCIONES DE ACTUALIZAR PROFESOR//
Function update_profesor($nombre, $apellido, $telefono, $correo, $estatus, $id){
    global $connect;
    $consulta= "UPDATE profesores SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', estatus='$estatus' WHERE  id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

//FUNCIONES DE ACTUALIZAR MATERIA//
Function update_materia($nombre, $licenciatura, $cuatrimestre, $id){
    global $connect;
    $consulta= "UPDATE materias SET nombre='$nombre', licenciatura='$licenciatura', cuatrimestre='$cuatrimestre' WHERE  id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

////////////////////////////////////////////////

//FUNCIONES DE ELIMINAR ALUMNO//
function eliminar_alumnos($id){
    global $connect;
    $consulta="DELETE FROM alumnos WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
    }

//FUNCIONES DE ELIMINAR PROFESOR//
function eliminar_profesores($id){
    global $connect;
    $consulta="DELETE FROM profesores WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
    }

//FUNCIONES DE ELIMINAR MATERIA//
function eliminar_materias($id){
    global $connect;
    $consulta="DELETE FROM materias WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
    }

////////////////////////////////////////////////

//FUNCIONES DE //
?>