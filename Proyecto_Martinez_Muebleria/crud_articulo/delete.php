<?php

include("conexion.php");
$con=conectar();

$nombre_articulo=$_GET['id'];

$sql="DELETE FROM `articulo` WHERE id='$nombre_articulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>
