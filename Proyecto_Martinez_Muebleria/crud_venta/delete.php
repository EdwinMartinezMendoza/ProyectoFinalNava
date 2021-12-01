<?php

include("conexion.php");
$con=conectar();

$nombre_venta=$_GET['id'];

$sql="DELETE FROM `venta` WHERE num_venta='$nombre_venta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>
