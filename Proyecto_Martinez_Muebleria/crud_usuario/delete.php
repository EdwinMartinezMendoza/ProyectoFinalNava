<?php

include("conexion.php");
$con=conectar();

$nombre_usuario=$_GET['id'];

$sql="DELETE FROM `usuario` WHERE id='$nombre_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
