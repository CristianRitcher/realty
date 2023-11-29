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

<?php include 'navbar1.html'?>

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
                <input type="text" name="txtusuario" placeholder="Usuario">
                </div>  

                <div class="log">  
                <input type="password" name="txtpassword" placeholder="Contraseña">
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

<?php include 'footer.html'?>

</html>