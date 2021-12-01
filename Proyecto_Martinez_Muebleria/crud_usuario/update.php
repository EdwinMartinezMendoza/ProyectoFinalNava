<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['nombre'];
$surname1=$_POST['apellido_paterno'];
$surname2=$_POST['apellido_materno'];
$date1=$_POST['fecha_nacimiento'];
$gender=$_POST['genero'];
$date2=$_POST['fech_registro'];
$email=$_POST['correo_electronico'];


/*$sql="UPDATE usuario SET nombre_usuario='$name',precio='$price',proveedor='$supplier',nombre_productos='$product',numero_de_serie='$serie' WHERE id='$id'";*/
$sql="UPDATE usuario SET nombre='$name',apellido_paterno='$surname1',apellido_materno='$surname2',fecha_nacimiento='$date1',genero='$gender',fech_registro='$date2',correo_electronico='$email' WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>