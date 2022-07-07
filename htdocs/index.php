<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime</title>
    <link rel="StyleSheet" href="Style/index.css" type="text/css">
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
                <a href="Htmls/FormSendEmail.php">
                    <input  class="input" type="button" value="Soporte">
                </a>
                <a href="Htmls/FormRegister.php">
                    <input  class="input" type="button" value="Registrarse">
                </a>
                <a href="Login/login.php">
                    <input class="input" type="button" value="Entrar">
                </a> 
            </div>
        </div>
        <div class="baul_header">
            <div class="sub_titulo">
                <h2>Profesional, Practico, Perfecto.</h2>
            </div>
        </div>    
    </header>
    <!--Categorias, las 3 cartas de comida-->
    <main>
        <div class="baul_categorias">
            <!--Contenedor de la carta Pizza-->
            <div class="baul_sushi">
                <div class="tittle_sushi">
                    <h4 class="h4_sushi">
                        Pizzas
                    </h4>
                </div>
                <div class="baul_img_sushi">
                    <a href="Htmls/CartaPizza.php">
                        <img  class="sushi" src="Style/Img/Pizza.jpg">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul_sushi">Revisar carta</p>
                </div>
            </div>
            <!--Contenedor de la carta Sushi-->
            <div class="baul_sushi">
                <div class="tittle_sushi">
                    <h4 class="h4_sushi">
                        Sushis
                    </h4>
                </div>
                <div class="baul_img_sushi">
                    <a href="Htmls/CartaSushi.php">
                        <img  class="sushi" src="Style/Img/SushiImg.jpg">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul_sushi">Revisar carta</p>
                </div>
            </div>
            <!--Contenedor de la carta Gohan-->
            <div class="baul_sushi">
                <div class="tittle_sushi">
                    <h4 class="h4_sushi">
                        Gohan
                    </h4>
                </div>
                <div class="baul_img_sushi">
                    <a href="Htmls/CartaGohan.php">
                        <img  class="sushi" src="Style/Img/Gohan.png">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul_sushi">Revisar carta</p>
                </div>
            </div>
        </div>
    </main>
    <!--Aqui esta el footer-->
    <footer>
        <div class="baul_numero_contacto">
            <p class="despacho">Call Center: +56 9 8393 7467</p>
        </div>
        <div class="baul_redes_sociales">
            <div class="pildora_red">
                    <a href="https://chat.whatsapp.com/L57aEGWchQlFiryQjs9QQK">
                        <img class="wspp" src="Style/Img/wsp.PNG">
                    </a>
               </div> 
               <div class="pildora_red">
                    <a href="https://www.facebook.com/">
                        <img class="face" src="Style/Img/Face.PNG">
                    </a>
               </div>
               <div class="pildora_red">
                    <a href="https://www.instagram.com/">
                        <img class="ints" src="Style/Img/Insta.PNG">
                    </a>
               </div>
        </div>
        <div class="baul_agradecimientos">
            <p class="despacho"> -Ciudad de los valles</p>
        </div>
    </footer>
</body>
</html>