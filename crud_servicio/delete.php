<?php

include("conexion.php");
$con=conectar();

$tel=$_GET['id'];

$sql="DELETE FROM servicio WHERE tel ='$tel'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicio.php");
    }
?>
