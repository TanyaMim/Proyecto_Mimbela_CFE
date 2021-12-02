<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$no_factura=$_POST['no_factura'];
$fecha=$_POST['fecha'];
$no_servicio=$_POST['no_servicio'];
$no_medidor=$_POST['no_medidor'];
$total=$_POST['total'];
$direccion=$_POST['direccion'];

$sql="UPDATE factura SET  nombre='$nombre', fecha='$fecha', no_servicio='$no_servicio', no_medidor='$no_medidor', total='$total', direccion='$direccion' WHERE no_factura='$no_factura'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>