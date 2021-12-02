<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM factura";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CFE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="no_factura" placeholder="No. de factura">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha de facturación">
                                    <input type="text" class="form-control mb-3" name="no_servicio" placeholder="No. de servicio">
                                    <input type="text" class="form-control mb-3" name="no_medidor" placeholder="No. de medidor">
                                    <input type="text" class="form-control mb-3" name="total" placeholder="Total a pagar">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/daweb_uii_5i/Proyecto_Mimbela_cfe/index.php">Inicio</a></li>  
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>No. factura</th>
                                        <th>Fecha de facturación</th>
                                        <th>No. de servicio</th>
                                        <th>No. de medidor</th>
                                        <th>Total a pagar</th>
                                        <th>Dirección</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['no_factura']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['no_servicio']?></th>
                                                <th><?php  echo $row['no_medidor']?></th>
                                                <th><?php  echo $row['total']?></th>
                                                <th><?php  echo $row['direccion']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['no_factura'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['no_factura'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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