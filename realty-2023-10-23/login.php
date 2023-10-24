<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

  
</head>

<header>
    <nav class="navbar" >

        <div class="logo">
            <a href="index.php"><img src="img/realty_logo_b.svg" alt="Logo de la empresa"></a>
        </div>

        <ul class="nav-links">
            <li><a href="index.php">/INICIO</a></li>
            <li><a href="#footer-img">/CONTACTO</a></li>
            <li class="dropdown">
                <a href="#">/MENÚ</a>
                <ul class="dropdown-content">
                    <li><a href="#">¿QUIÉNES SOMOS?</a></li>
                    <li><a href="#">NUESTROS SERVICIOS</a></li>
                    <li><a href="#">VENDE TU PROPIEDAD</a></li>
                    <li><a href="#">VUÉLVETE AGENTE</a></li>
                    <li><a href="#">AVISO DE PRIVACIDAD</a></li>
                    <li><a href="#">NUESTRO BLOG</a></li>
                </ul>
            </li>
            <li><a href="login.php">/LOGIN</a></li>
        </ul>

    </nav>
</header>

<body>

    <div class="pantalla_sesion">

        <div class="imagen_sesion">
            <img src="img/casa.jpg" id="sala">
        </div>

        

        <div class="inicio_sesion">
            
            <div>
                <h2>Inicio de sesión</h2>
                <br>
            </div>

            <form method="post" action="php/login.php">
            
                <div class="log">   
                <input type="text" name="txtusuario" placeholder="Usuario:">
                </div>  

                <div class="log">  
                <input type="password" name="txtpassword" placeholder="Contraseña:">
                </div>  
                  
                <div class="log">  
                <input type="submit" value="INGRESAR">
                
                </div>

            </form>

            <div class="crear_cuenta" id="crear_cuenta1">
                <button class="boton-mi" >CREAR CUENTA</button>
            </div>

            <div class="imagen_realty">
                <img src="img/realty_logo_r.svg">
            </div>

        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<footer>
    <div class="footer-img" id="footer-img">
  
      <div class="footer-realty-logo">
        <img src="img/realty_logo_b.svg">
      </div>
  
      <div class="contacto">
        <p>Dirección: México 45, Los Encinos, 34307 MÉXICO, Victoria de Durango, Dgo. </p>
        <p>E-mail: realty-dgo@gmail.com</p>
        <p>Tel. 1: (618) 277 21 01 </p>
        <p>Tel. 2: (618) 029 18 28 </p>
      </div>
  
      <div class="redes">
        <img src="img/twitter.png" alt="">
        <img src="img/whatsapp.png" alt="">
        <img src="img/youtube.png" alt="">
        <img src="img/instagram.png" alt="">
        <img src="img/facebook.png" alt="">
      </div>
  
    </div>
    
    <div class="recursos">
  
      <div>
        <h3>Nosotros</h3>
        <ul>
          <li>Aviso de privacidad</li>
          <li>Código de ética</li>
          <li>Terminos y Condiciones</li>
          <li>blog</li>
        </ul>
      </div>
  
      <div>
        <h3>Recursos</h3>
        <ul>
          <li>Calculadora inmobiliaria</li>
          <li>Testimonios</li>
          <li>Oficinas</li>
        </ul>
      </div>
  
      <div>
        <h3>¿Eres un agente?</h3>
        <ul>
          <li>¿Cómo funciona Realy?</li>
          <li>¿Por qué Realty?</li>
          <li>Primeros pasos</li>
          <li>Únete a nuestro equipo</li>
          <li>Disposiciones legales</li>
        </ul>
      </div>
  
    </div>
  </footer>

</html>