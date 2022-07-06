<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pizza";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Pizza</title>
    <link rel="StyleSheet" href="../Style/CS.css" type="text/css">
</head>
<body>
<header>
    <div class="baul_header">
        <div class="titulo">
            <h1>Sublime</h1>
            <h1 class="Titulo_principal"></h1>
        </div>
        <div class="panel_button">
            <a href="Administrador.php">
                <input class="input" type="button" value="Carta Sushi">
            </a> 
            <a href="Administrador2.php">
                <input class="input" type="button" value="Carta Gohan">
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
    <form action="insertar1.php" method="POST" enctype="multipart/formdata" required>
        <input type="text"  name="Titulo" placeholder="Titulo" required>
        <input type="text"  name="descripcion" placeholder="Descripcion" required>
        <input type="text"  name="imagen" placeholder="Imagen-URL" required>
        <input type="text"  name="precio" placeholder="Precio" required>
        <input type="submit">
    </form>
    <table>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['Titulo']?></th>
                        <th><?php  echo $row['descripcion']?></th>
                        <th><img src="<?php  echo $row['imagen']?>" width="100px" height="100px"/></th>
                        <th><?php  echo $row['precio']?></th>
                        <th><a href="actualizar1.php?id=<?php echo $row['Titulo'] ?>" >Modificar Pizza</a></th>
                        <th><a href="delete1.php?id=<?php echo $row['Titulo'] ?>" >Eliminar Pizza</a></th>                                          
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
    </table>
</body>
</html>