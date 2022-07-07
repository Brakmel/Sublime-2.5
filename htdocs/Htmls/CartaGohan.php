<?php 
    include("../Php/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM gohan";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta Sushi</title>
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
            <a href="../index.php">
                <input class="input" type="button" value="Regresar">
            </a>
            <a href="CartaPizza.php">
                <input class="input" type="button" value=" Pizza ">
            </a>
            <a href="CartaSushi.php">
                <input class="input" type="button" value="Sushi">
            </a>   
            <a href="../Htmls/FormSendEmail.php">
                <input  class="input" type="button" value="Soporte">
            </a>
            <a href="../Htmls/FormRegister.php">
                <input  class="input" type="button" value="Registrarse">
            </a>
            <a href="../Login/Login.php">
                    <input type="button" value="Entrar">
                </a> 
         </div>
    </div>
    <div class="baul_header">
        <div class="sub_titulo">
            <h2>Profesional, Practico, Perfecto.</h2>
        </div>
    </div>    
</header>
<table>
    <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
            <tr>
                 <th><?php  echo $row['Titulo']?></th>
                <th><?php  echo $row['descripcion']?></th>
                <th><a href="https://chat.whatsapp.com/L57aEGWchQlFiryQjs9QQK"><img class="sushiimg" src="<?php  echo $row['imagen']?>"/></a></th>
                <th><?php  echo $row['precio']?></th>                                          
             </tr>
         <?php 
            }
        ?>
    </tbody>
</table>
    <!--Aqui esta el footer-->
    <footer>
        <div class="baul_numero_contacto">
            <p class="despacho">Call Center: +56 9 8393 7467</p>
        </div>
        <div class="baul_redes_sociales">
               <div class="pildora_red">
                    <a href="https://chat.whatsapp.com/L57aEGWchQlFiryQjs9QQK">
                        <img class="wspp" src="../Style/Img/wsp.PNG">
                    </a>
               </div> 
               <div class="pildora_red">
                    <a href="https://www.facebook.com/">
                        <img class="face" src="../Style/Img/Face.PNG">
                    </a>
               </div>
               <div class="pildora_red">
                    <a href="https://www.instagram.com/">
                        <img class="ints" src="../Style/Img/Insta.PNG">
                    </a>
               </div>
        </div>
        <div class="baul_agradecimientos">
            <p class="despacho"> -Ciudad de los valles</p>
        </div>
    </footer>
</body>
</html>