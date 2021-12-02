<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM servicio WHERE tel='$id'";
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
                    
                                <input type="hidden" name="tel" value="<?php echo $row['tel']  ?>">
                                
                                    <input type="text" class="form-control mb-3" name="tel" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo de servicio">
                                    <input type="text" class="form-control mb-3" name="especificacion" placeholder="Especificación del servicio">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario">
                                    <input type="text" class="form-control mb-3" name="sugerencia" placeholder="Sugerencias">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>