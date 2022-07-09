<?php
require_once("../lib/functions.php");
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - escuela</title>
</head>

<body>
    <center>
        <h1>Crear alumno<small><a href="index.php"><h4 style="text-align:center">Volver al listado de alumnos</h4></a></small></h1>
    </center>
<center>
    <style>
    p {color:red;
       font-weight: bolder;
      }
    </style>

        <form action="" method="POST"style="background-color:#E6E6FA; width:25%; padding:1%;">

              <div class="elemento">
                <label for="nombre">Nombre:</label><br><br>
                <input type="text" name="nombre"/>
              </div>

              <div class="elemento">
              <br><label for="apellidos">Apellidos:</label><br><br>
                  <input type="text" name="apellidos"/>
              </div>

              <div class="elemento">
              <br><label for="telefono">Teléfono:</label><br><br>
                <input type="text" name="telefono"/>
              </div>

              <div class="elemento">
              <br><label for="correo">Correo electrónico:</label><br><br>
                <input type="text" name="correo"/>
              </div>

              <div class="elemento">
              <br><label for="licenciatura">Licenciatura:</label><br><br>
                <input type="text" name="licenciatura"/>
              </div>

              <div class="elemento">
              <br><label for="cuatrimestre">cuatrimestre:</label><br><br>
                <input type="text" name="cuatrimestre"/>
              </div>

              <div class="elemento">
              <br><label for="estatus">estatus:</label><br><br>
                <input type="text" name="estatus"/>
              </div>

              <br><br>
              <button type="submit" name="submit">AÑADIR ALUMNO</button>
              <?php 
              require("insert.php");

              if(isset($_POST['submit'])){
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $telefono = $_POST['telefono'];
                $correo = $_POST['correo'];
                $licenciatura = $_POST['licenciatura'];
                $cuatrimestre = $_POST['cuatrimestre'];
                $estatus = $_POST['estatus'];
              
              if($nombre==NULL){
                echo "<p>El campo nombre no puede estar vacío</p>";}
              if($nombre!=NULL){
                if(is_numeric($nombre)){
                    echo "<p>El campo nombre no puede contener números</p>";}
                    else{current($_POST);}}

                    if($apellidos==NULL){
                      echo "<p>El campo apellidos no puede estar vacío</p>";}
                    if($apellidos!=NULL){
                      if(is_numeric($apellidos)){
                          echo "<p>El campo apellidos no puede contener números</p>";}
                          else{}}

                          if($telefono==NULL){
                            echo "<p>El campo telefono no puede estar vacío</p>";}
                          if($telefono!=NULL){
                            if(is_numeric($telefono)){}
                                else{echo "<p>El campo telefono no puede contener letras</p>";}}

                                if($correo==NULL){
                                  echo "<p>El campo correo no puede estar vacío</p>";}
                                if($correo!=NULL){
                                  if(strpos($correo, "@" & ".com")==false){echo "<p>El campo correo debe contener @ y finalizar con .com</p>";}
                                  else{}}

                                  if($licenciatura==NULL){
                                    echo "<p>El campo licenciatura no puede estar vacío</p>";}
                                if($licenciatura!=NULL){
                                    if(is_numeric($licenciatura)){echo "<p>El campo licenciatura no puede contener números</p>";}
                                    else{}}

                                    if($cuatrimestre==NULL){
                                      echo "<p>El campo cuatrimestre no puede estar vacío</p>";}
                                  if($cuatrimestre!=NULL){
                                      if(is_numeric($cuatrimestre)){}
                                      else{echo "<p>El campo cuatrimestre no puede contener letras</p>";}}

                                      if($estatus==NULL){
                                        echo "<p>El campo estatus no puede estar vacío</p>";}
                                    if($estatus!=NULL){
                                        if(is_numeric($estatus)){}
                                        else{echo "<p>El campo estatus no puede contener letras</p>";}}
                          
              }
              ?>
        </form>

</center>
</body>
</html>