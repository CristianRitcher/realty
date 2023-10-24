
<?php include 'php/guardian.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu-control.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    
</head>

<?php include 'navbar2.html'?>

<body>
    <div class="contenido">

        <div class="pantalla-control">
            <div class="perfil">
                <a href=""><img src="img/persona.png" alt=""></a>
                <div>
                    <p>Nombre del Agente/ADMIN</p>
                    <a href="">VER PERFIL</a>
                </div>
            </div>
            <div class="contactos">
                <a href="crud-clientes.php"><button>CONTACTOS</button></a>
            </div>
            <div class="propiedades">
                <a href="propiedades.php"><button>PROPIEDADES</button></a>
            </div>
            <div class="img-logo">
                <img src="img/realty_logo_r.svg" alt="Logo">
            </div>
        </div>

        <div class="img-habitacion">
            <img src="img/sala-login.jpg" alt="foto habitacion">
        </div>

    </div>
</body>

<?php include 'footer.html'?>

</html>
