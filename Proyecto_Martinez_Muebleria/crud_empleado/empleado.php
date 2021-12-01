


<?php 

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title> PAGINA empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese empleado</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de mpleado">
                                    <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido Paterno">
                                    <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="Apellido Materno">
                                    <input type="text" class="form-control mb-3" name="genero" placeholder="Genero">
                                    <input type="date" class="form-control mb-3" name="fech_nacimiento" placeholder="Fecha de Nacieminto">
                                    <input type="text" class="form-control mb-3" name="correo_electronico" placeholder="Correo electronico">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>ID</th>
                                        <th>Nombre del empleado</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>genero</th>
                                        <th>sueldo</th>
                                        <th>fech_nacimiento</th>
                                        <th>Correo Electronico</th>

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
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido_paterno']?></th>
                                                <th><?php  echo $row['apellido_materno']?></th>
                                                <th><?php  echo $row['genero']?></th>  
                                                <th><?php  echo $row['sueldo']?></th>
                                                <th><?php  echo $row['fech_nacimiento']?></th>
                                                <th><?php  echo $row['correo_electronico']?></th>

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