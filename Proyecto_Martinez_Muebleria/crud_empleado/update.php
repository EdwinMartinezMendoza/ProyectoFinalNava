<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['nombre'];
$lastname1=$_POST['apellido_paterno'];
$lastname2=$_POST['apellido_materno'];
$gender=$_POST['genero'];
$salary=$_POST['sueldo'];
$date=$_POST['fech_nacimiento'];
$email=$_POST['correo_electronico'];


/*$sql="UPDATE empleado SET nombre_empleado='$name',precio='$price',proveedor='$supplier',nombre_productos='$product',numero_de_serie='$serie' WHERE id='$id'";*/
$sql="UPDATE empleado SET nombre='$name',apellido_paterno='$lastname1',apellido_materno='$lastname2',genero='$gender',sueldo='$salary',fech_nacimiento='$date',correo_electronico='$email' WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>