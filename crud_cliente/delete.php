<?php

include("conexion.php");
$con=conectar();

$no_cliente=$_GET['id'];

$sql="DELETE FROM cliente WHERE no_cliente ='$no_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
