<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE id='$id'";
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
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del Empleado" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido Paterno" value="<?php echo $row['apellido_paterno']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="Apellido Materno" value="<?php echo $row['apellido_materno']  ?>">
                                <input type="text" class="form-control mb-3" name="genero" placeholder="Genero" value="<?php echo $row['genero']  ?>">
                                <input type="text" class="form-control mb-3" name="sueldo" placeholder="Sueldo" value="<?php echo $row['sueldo']  ?>">
                                <input type="date" class="form-control mb-3" name="fech_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['fech_nacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="correo_electronico" placeholder="Correo Electronico" value="<?php echo $row['correo_electronico']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>
                    
                </div>
    </body>
</html>