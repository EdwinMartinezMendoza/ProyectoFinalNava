<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM venta WHERE num_venta='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="num_venta" value="<?php echo $row['num_venta']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha_venta" placeholder="Fecha venta" value="<?php echo $row['fecha_venta']  ?>">
                                <input type="text" class="form-control mb-3" name="producto_vendido" placeholder="Producto vendido" value="<?php echo $row['producto_vendido']  ?>">
                                <input type="text" class="form-control mb-3" name="promocion" placeholder="Promocion" value="<?php echo $row['promocion']  ?>">
                                <input type="text" class="form-control mb-3" name="cliente" placeholder="Cliente" value="<?php echo $row['cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="vendedor" placeholder="Vendedor" value="<?php echo $row['vendedor']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>
                    
                </div>
    </body>
</html>