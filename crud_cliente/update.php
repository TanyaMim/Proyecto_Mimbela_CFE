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

$sql="UPDATE cliente SET  nombre='$nombre',apellido_p='$apellido_p', apellido_m='$apellido_m', tel='$tel', correo='$correo', fecha='$fecha' WHERE no_cliente='$no_cliente'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>