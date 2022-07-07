<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime</title>
    <link rel="StyleSheet" href="../Style/Correo.css" type="text/css">
</head>
<body>
    <!--Aqui esta nuestro header principal, el cual contiene el titulo y los botones para navegar entre nuestras paginas-->
    <header>
        <div class="baul_header">
            <div class="titulo">
                <h1>Sublime</h1>
                <h1 class="Titulo_principal"></h1>
            </div>
            <div class="panel_button">
                <a href="../Htmls/FormSendEmail.php">
                    <input  class="input" type="button" value="Soporte">
                </a>
                <a href="../Htmls/FormRegister.php">
                    <input  class="input" type="button" value="Registrarse">
                </a>
                <a href="../index.php">
                    <input class="input" type="button" value=" Inicio">
                </a>  
            </div>
        </div>
        <div class="baul_header">
            <div class="sub_titulo">
                <h2>Profesional, Practico, Perfecto.</h2>
            </div>
        </div>    
    </header>
    <!--Login-->
    <main>
        <form action="validar.php" method="POST">
            <h1>Iniciar Sesion</h1>
            <br>
            <p>Usuario</p>
            <input type="text" name="User" placeholder="Usuario" required>
            <p>Contraseña</p>
            <input type="password" name="Pass" placeholder="********" required>
            <br>
            <p>Se le recuerda que no es necesario tener una cuenta para poder comprar,
                la cuenta como socio nuestro le da el beneficio de los SuplimePoints...,
                más informacion en "Registrarse".
            </p>
            <input type="submit" value="ingresar">
        </form>
    </main>
    <!--Aqui esta el footer-->
    <footer>
        <div class="baul_numero_contacto">
            <p class="despacho">Call Center: +56 9 8393 7467</p>
        </div>
        <div class="baul_redes_sociales">
               <div class="pildora_red">
                    <a href="https://web.whatsapp.com/">
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