<?php

include("conexion.php");
$con=conectar();

$Titulo=$_GET['id'];

$sql="DELETE FROM gohan  WHERE Titulo='$Titulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Administrador2.php");
    }
?>