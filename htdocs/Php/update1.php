<?php

include("conexion.php");
$con=conectar();

$Titulo=$_POST['Titulo'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];
$url=$_POST['url'];
$precio=$_POST['precio'];

$sql="UPDATE pizza SET  descripcion='$descripcion',imagen='$imagen',precio='$precio' WHERE Titulo='$Titulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Administrador1.php");
    }
?>