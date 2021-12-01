<?php 

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM venta";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title> PAGINA venta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese venta</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="date" class="form-control mb-3" name="fecha_venta" placeholder="Fecha de la venta">
                                    <input type="text" class="form-control mb-3" name="producto_vendido" placeholder="Producto vendido">
                                    <input type="text" class="form-control mb-3" name="promocion" placeholder="Promocion">
                                    <input type="text" class="form-control mb-3" name="cliente" placeholder="Cliente">
                                    <input type="text" class="form-control mb-3" name="vendedor" placeholder="Vendedor">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>ID</th>
                                        <th>Precio</th>
                                        <th>Fecha de la venta</th>
                                        <th>Producto vendido</th>
                                        <th>Promocion</th>
                                        <th>CLiente</th>
                                        <th>Vendedor</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['num_venta']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['fecha_venta']?></th>
                                                <th><?php  echo $row['producto_vendido']?></th>
                                                <th><?php  echo $row['promocion']?></th>  
                                                <th><?php  echo $row['cliente']?></th>
                                                <th><?php  echo $row['vendedor']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['num_venta'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['num_venta'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>