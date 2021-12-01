<?php

include("conexion.php");
$con=conectar();

$id=$_POST['num_venta'];
$price=$_POST['precio'];
$date=$_POST['fecha_venta'];
$product=$_POST['producto_vendido'];
$promotion=$_POST['promocion'];
$customer=$_POST['cliente'];
$seller=$_POST['vendedor'];


/*$sql="UPDATE venta SET nombre_venta='$name',precio='$price',proveedor='$supplier',nombre_productos='$product',numero_de_serie='$serie' WHERE id='$id'";*/
$sql="UPDATE venta SET precio='$price',fecha_venta='$date',producto_vendido='$product',promocion='$promotion',cliente='$customer',vendedor='$seller' WHERE num_venta='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>