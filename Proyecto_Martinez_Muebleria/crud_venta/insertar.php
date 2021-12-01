<?php
include("conexion.php");
$con=conectar();


$price=$_POST['precio'];
$date=$_POST['fecha_venta'];
$product=$_POST['producto_vendido'];
$promotion=$_POST['promocion'];
$customer=$_POST['cliente'];
$seller=$_POST['vendedor'];


/*$sql="INSERT INTO venta(nombre_venta, precio, proveedor, nombre_productos, numero_de_serie) VALUES ('$name','$price','$supplier','$product','$serie')";*/
$sql="INSERT INTO venta(precio, fecha_venta, producto_vendido, promocion, cliente, vendedor) VALUES ('$price','$date','$product','$promotion','$customer','$seller')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>