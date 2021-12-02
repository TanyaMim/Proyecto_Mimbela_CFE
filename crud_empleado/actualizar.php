<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE no_empleado='$id'";
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
                    
                                <input type="hidden" name="no_empleado" value="<?php echo $row['no_empleado']  ?>">
                                
                               
                                <input type="text" class="form-control mb-3" name="no_empleado" placeholder="No. de empleado">    
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido_p" placeholder="Apellido paterno">
                                    <input type="text" class="form-control mb-3" name="apellido_m" placeholder="Apellido materno">
                                    <input type="text" class="form-control mb-3" name="tel" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha de nacimiento">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>