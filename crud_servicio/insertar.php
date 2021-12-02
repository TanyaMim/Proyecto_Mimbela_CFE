<?php
include("conexion.php");
$con=conectar();

$tel=$_POST['tel'];
$correo=$_POST['correo'];
$tipo=$_POST['tipo'];
$especificacion=$_POST['especificacion'];
$direccion=$_POST['direccion'];
$propietario=$_POST['propietario'];
$sugerencia=$_POST['sugerencia'];

$sql="INSERT INTO servicio VALUES('$tel','$correo','$tipo','$especificacion','$direccion','$propietario','$sugerencia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: servicio.php");
    
}else {
}
?>