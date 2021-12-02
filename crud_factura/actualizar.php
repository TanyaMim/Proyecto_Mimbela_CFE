<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM factura WHERE no_factura='$id'";
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
                    
                                <input type="hidden" name="no_factura" value="<?php echo $row['no_factura']  ?>">
                                
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="no_factura" placeholder="No. de factura">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha de facturación">
                                    <input type="text" class="form-control mb-3" name="no_servicio" placeholder="No. de servicio">
                                    <input type="text" class="form-control mb-3" name="no_medidor" placeholder="No. de medidor">
                                    <input type="text" class="form-control mb-3" name="total" placeholder="Total a pagar">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>