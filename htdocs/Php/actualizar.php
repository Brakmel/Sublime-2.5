<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM sushi WHERE Titulo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime</title>
    <link rel="StyleSheet" href="../Style/CS.css" type="text/css">
</head>
<header>
    <div class="baul_header">
        <div class="titulo">
            <h1>Sublime</h1>
            <h1 class="Titulo_principal"></h1>
        </div>
        <div class="panel_button">
            <a href="Administrador.php">
                <input class="input" type="button" value="Volver atras">
            </a> 
            <a href="../index.php">
                <input class="input" type="button" value="Cerrar sesion">
            </a> 
        </div>
    </div>
    <div class="baul_header">
        <div class="sub_titulo">
            <h2>Profesional, Practico, Perfecto.</h2>
        </div>
    </div>    
</header>
    <body>
        <form action="update.php" method="POST">
            <input type="hidden" name="Titulo" value="<?php echo $row['Titulo']  ?>">
            <input type="text"  name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']  ?>">
            <input type="text"  name="imagen" placeholder="URL-imagen" value="<?php echo $row['imagen']  ?>">
            <input type="text"  name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>