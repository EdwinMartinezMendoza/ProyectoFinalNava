


<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title> PAGINA articulo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese Articulo</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre_articulo" placeholder="Nombre articulo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor">
                                    <input type="text" class="form-control mb-3" name="existencias" placeholder="Existencias">
                                    <input type="date" class="form-control mb-3" name="fech_adquisicion" placeholder="Fecha adquisicion">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <!--<input type="button" value="INICIO" onclick="location='../index.php'">-->
                                    <a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>ID</th>
                                        <th>Nombre del articulo</th>
                                        <th>Precio</th>
                                        <th>Proveedor</th>
                                        <th>exitencias</th>
                                        <th>fecha de adquisicion</th>
                                        <th>descripcion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre_articulo']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['proveedor']?></th>
                                                <th><?php  echo $row['existencias']?></th>  
                                                <th><?php  echo $row['fech_adquisicion']?></th>
                                                <th><?php  echo $row['descripcion']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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