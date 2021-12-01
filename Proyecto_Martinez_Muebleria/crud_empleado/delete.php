<?php

include("conexion.php");
$con=conectar();

$nombre_empleado=$_GET['id'];

$sql="DELETE FROM `empleado` WHERE id='$nombre_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>
