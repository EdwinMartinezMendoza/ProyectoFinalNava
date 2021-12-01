<?php
include("conexion.php");
$con=conectar();



$name=$_POST['nombre_articulo'];
$price=$_POST['precio'];
$supplier=$_POST['proveedor'];
$existence=$_POST['existencias'];
$date=$_POST['fech_adquisicion'];
$description=$_POST['descripcion'];


/*$sql="INSERT INTO articulo(nombre_articulo, precio, proveedor, nombre_productos, numero_de_serie) VALUES ('$name','$price','$supplier','$product','$serie')";*/
$sql="INSERT INTO articulo(nombre_articulo, precio, proveedor, existencias, fech_adquisicion, descripcion) VALUES ('$name','$price','$supplier','$existence','$date','$description')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>