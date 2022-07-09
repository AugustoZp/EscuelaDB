
    if($nombre==NULL){
        echo "<p>El campo nombre no puede estar vacío</p>";}
    if($nombre!=NULL){
        if(is_numeric($nombre)){
            echo "<p>El campo nombre no puede contener números</p>";}
        else{}}

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






        required="" pattern="[0-9]+"

        required="" pattern="[a-zA-Z]+"






        <?php
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
        else{}}
    }
?>














        $campos=array();

    if($nombre=="" or is_numeric($nombre)){
        array_push($campos,"El campo nombre no puede estar vacío");}
    if($apellidos==""){
        array_push($campos,"El campo apellidos no puede estar vacío");}
    if($telefono=="" || strlen($telefono)<10){
        array_push($campos,"El campo telefono debe contener 10 carácteres");}
    if($correo=="" || strpos($correo,"@" & ".com")==false){
        array_push($campos,"Introduzca un correo electrónico valido");}
    if($licenciatura==""){
        array_push($campos,"El campo licenciatura no puede estar vacío");}
    if($cuatrimestre==""){
        array_push($campos,"El campo cuatrimestre no puede estar vacío");}
    if($estatus==""){
        array_push($campos,"El campo estatus no puede estar vacío");}

    if(count($campos)>0){
        for($i=0; $i<count($campos); $i++){
            echo "<li>".$campos[$i]."</li>";
        }
    }


















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
            }
    }
}else{
    echo "<p>Debe rellenar todos los campos antes de continuar</p>";
}
?>