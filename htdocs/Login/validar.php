<?php
include('db.php');
$User=$_POST['User'];
$Pass=$_POST['Pass'];
session_start();
$_SESSION['User']=$User;


$conexion=mysqli_connect("localhost","root","","sublime");

$consulta="SELECT*FROM usuarios where User='$User' and Pass='$Pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../Php/Administrador.php");

}else{
    ?>
  <h1>Ups... Algun dato pusiste mal amig@ = (, me da la espina que no perteneces aqui quizas...👀 regresa a la pagina principal tocando aquí: <a href="../index.php">Volver</a></h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);