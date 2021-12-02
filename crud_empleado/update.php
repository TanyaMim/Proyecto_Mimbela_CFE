<?php

include("conexion.php");
$con=conectar();

$no_empleado=$_POST['no_empleado'];
$nombre=$_POST['nombre'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$fecha=$_POST['fecha'];

$sql="UPDATE empleado SET  nombre='$nombre',apellido_p='$apellido_p', apellido_m='$apellido_m', tel='$tel', correo='$correo', fecha='$fecha' WHERE no_empleado='$no_empleado'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>