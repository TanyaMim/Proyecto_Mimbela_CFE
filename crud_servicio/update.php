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

$sql="UPDATE servicio SET  correo='$correo',tipo='$tipo', especificacion='$especificacion', direccion='$direccion', propietario='$propietario', sugerencia='$sugerencia' WHERE tel='$tel'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicio.php");
    }
?>