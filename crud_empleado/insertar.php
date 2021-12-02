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

$sql="INSERT INTO empleado VALUES('$no_empleado','$nombre','$apellido_p','$apellido_m','$tel','$correo','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>