<?php
include("conexion.php");
$con=conectar();



$name=$_POST['nombre'];
$surname1=$_POST['apellido_paterno'];
$surname2=$_POST['apellido_materno'];
$date1=$_POST['fecha_nacimiento'];
$gender=$_POST['genero'];
$date2=$_POST['fech_registro'];
$email=$_POST['correo_electronico'];


/*$sql="INSERT INTO usuario(nombre_usuario, precio, proveedor, nombre_productos, numero_de_serie) VALUES ('$name','$price','$supplier','$product','$serie')";*/
$sql="INSERT INTO usuario(nombre, apellido_paterno, apellido_materno, fecha_nacimiento, genero, fech_registro, correo_electronico) VALUES ('$name','$surname1','$surname2','$date1','$gender','$date2','$email')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>