<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM servicio";
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

                                    <input type="text" class="form-control mb-3" name="tel" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo de servicio">
                                    <input type="text" class="form-control mb-3" name="especificacion" placeholder="Especificación del servicio">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario">
                                    <input type="text" class="form-control mb-3" name="sugerencia" placeholder="Sugerencia">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/daweb_uii_5i/Proyecto_Mimbela_cfe/index.php">Inicio</a></li>  
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Tipo de servicio</th>
                                        <th>Especificación del servicio</th>
                                        <th>Dirección</th>
                                        <th>Propietario</th>
                                        <th>Sugerencias</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['tel']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['especificacion']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['propietario']?></th>
                                                <th><?php  echo $row['sugerencia']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['tel'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['tel'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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