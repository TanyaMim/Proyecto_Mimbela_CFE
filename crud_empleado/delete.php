<?php

include("conexion.php");
$con=conectar();

$no_empleado=$_GET['id'];

$sql="DELETE FROM empleado WHERE no_empleado ='$no_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>
