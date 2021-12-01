<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['nombre_articulo'];
$price=$_POST['precio'];
$supplier=$_POST['proveedor'];
$existence=$_POST['existencias'];
$date=$_POST['fech_adquisicion'];
$description=$_POST['descripcion'];


/*$sql="UPDATE articulo SET nombre_articulo='$name',precio='$price',proveedor='$supplier',nombre_productos='$product',numero_de_serie='$serie' WHERE id='$id'";*/
$sql="UPDATE articulo SET nombre_articulo='$name',precio='$price',proveedor='$supplier',existencias='$existence',fech_adquisicion='$date',descripcion='$description' WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>