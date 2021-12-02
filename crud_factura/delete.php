<?php

include("conexion.php");
$con=conectar();

$no_factura=$_GET['id'];

$sql="DELETE FROM factura WHERE no_factura ='$no_factura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
