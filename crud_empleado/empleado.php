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

                                    <input type="text" class="form-control mb-3" name="no_empleado" placeholder="No. de empleado">    
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido_p" placeholder="Apellido paterno">
                                    <input type="text" class="form-control mb-3" name="apellido_m" placeholder="Apellido materno">
                                    <input type="text" class="form-control mb-3" name="tel" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha de nacimiento">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/daweb_uii_5i/Proyecto_Mimbela_cfe/index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No. de empleado</th>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Fecha de nacimiento</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['no_empleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido_p']?></th>
                                                <th><?php  echo $row['apellido_m']?></th>
                                                <th><?php  echo $row['tel']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['fecha']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['no_empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['no_empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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