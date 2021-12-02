<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$no_cliente=$_POST['no_cliente'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO cliente VALUES('$nombre','$apellido_p','$apellido_m','$no_cliente','$tel','$correo','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>