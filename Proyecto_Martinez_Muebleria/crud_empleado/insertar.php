<?php
include("conexion.php");
$con=conectar();



$name=$_POST['nombre'];
$lastname1=$_POST['apellido_paterno'];
$lastname2=$_POST['apellido_materno'];
$gender=$_POST['genero'];
$salary=$_POST['sueldo'];
$date=$_POST['fech_nacimiento'];
$email=$_POST['correo_electronico'];


/*$sql="INSERT INTO empleado(nombre_empleado, precio, proveedor, nombre_productos, numero_de_serie) VALUES ('$name','$price','$supplier','$product','$serie')";*/
$sql="INSERT INTO empleado(nombre, apellido_paterno, apellido_materno, genero, sueldo, fech_nacimiento, correo_electronico) 
VALUES ('$name','$lastname1','$lastname2','$gender','$salary','$date','$email')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>