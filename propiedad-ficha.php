
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet"  href="css/propiedad-ficha.css">
   
</head>

<?php include 'navbar1.html' ?>

<body>
    <div class="contenido">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="boton_modal">
            <div class="galeria" id="gal0">

                <div id="gal01">
                    <img src="img/ficha1.png" >
                </div>

                <div id="gal02">

                    <div class="galeria" id="gal021">
                        <img src="img/ficha3.png" alt="">
                        <img src="img/ficha4.png" alt="">
                    </div>

                    <div class="galeria" id="gal022">
                        <img src="img/ficha5.png" alt="">
                        <img src="img/ficha6.png" alt="">
                    </div>
                    
                </div>
                
            </div>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="img/ficha1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha3.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha4.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha5.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha6.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha7.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha8.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha9.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha10.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha11.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha12.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha13.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha14.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha15.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha16.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha17.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha18.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha19.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/ficha20.png" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="info_propiedad">
                
            <div class="caracteristicas">
               
                <h2>EXTRAORDINARIA CASA QUE SE ENCUENTRA ENTRE LAS MEJORES EDIFICACIONES DEL NORTE DE COBB</h2>
                
                <div id="general">
                    <p id="gen">7 Habitaciones | 8 Baños | 1,184 sqm | 2 ha lot | $ 43,471/sqm</p>
                    <p id="precio">$55,811,639 </p>
                </div>    
                
                <div>
                    <h3>Descripcion</h3>
                    <p id="descripcion" align="justify">Presentamos una casa extraordinaria que realmente se erige como una de las mejores 
                        joyas del norte Condado de Cobb. Ubicada en medio de 3,45 acres de exquisita belleza similar a un parque, 
                        esta gran residencia de ladrillo de cuatro lados irradia un lujo y un esplendor incomparables.  
                        Esta impresionante finca no solo cuenta con un extenso y meticulosamente cuidado césped que podría 
                        rivalizar con el famoso Campo de los Sueños, sino que los impresionantes terrenos también cuentan con 
                        una miríada de lujosas comodidades para satisfacer todas sus necesidades de ocio: una cancha de tenis 
                        iluminada para <span id="dots">...</span><span id="more"> los amantes del deporte, una piscina climatizada y un spa para la máxima relajación y un 
                        arroyo balbuceante con cascadas para calmar los sentidos. <br><br>Al entrar en el altísimo vestíbulo de dos 
                        pisos, uno se deja seducir al instante por la opulencia y la magnificencia de esta extraordinaria 
                        vivienda. La escalera, elegantemente curvada, invita a uno a entrar más y conduce a la voluminosa gran 
                        sala de dos pisos junto a la chimenea, que revela impresionantes vistas de la finca. La cocina del chef, 
                        que incluye una gran isla central y una barra de desayuno, presenta un verdadero paraíso para los epicúreos 
                        y ofrece deliciosos experimentos culinarios. Dentro de la casa, una acogedora sala de estar junto a la 
                        chimenea y un comedor formal irradian una elegancia sofisticada y crean el ambiente perfecto para entretener 
                        a los invitados. Una lujosa oficina doméstica con paneles y una biblioteca ofrecen un refugio elegante y 
                        señorial para trabajar desde casa. Una opulenta suite principal está lujosamente decorada con una generosa 
                        sala de estar independiente y un baño tipo centro turístico que ofrece el mejor santuario para la relajación. 
                        <br><br>En el nivel inferior, una terraza completamente terminada se completa con un gimnasio, una espaciosa sala de 
                        recreo, una sala de juegos y un cine en casa, que ofrecen el espacio ideal para entretenerse y organizar 
                        grandes reuniones. La propiedad cuenta además con una fantástica suite para suegros situada sobre el garaje 
                        para tres coches, y una casa de piscina repleta de una cocina americana y cómodos baños junto a la piscina. 
                        Los terrenos y jardines, meticulosamente cuidados, cuentan con un atractivo cautivador, que incluye jardines 
                        formales e informales, exuberantes paisajes y setos maduros, que ofrecen una oportunidad única en la vida que 
                        seguramente cautivará e inspirará.</span></p> 
                    <button onclick="myFunction()" id="myBtn">Seguir leyendo</button>
                </div>
        
                <div class="amenidades">
                    <h3>Amenidades</h3>
                    <div>
                        <div class="amenidades" id="amenidades">
                            <div>
                                <ul>
                                    <li><p>Vista al Agua</p></li>
                                    <li><p>Privacidad</p></li>
                                    <li><p>Interior</p></li>
                                    <li><p>Encimeras de piedra</p></li>
                                    <li><p>Chimenea</p></li>
                                    <li><p>Patio de recreo</p></li>
                                    <li><p>Jardín</p></li>
                                    <li><p>Piscina</p></li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><p>Aire Acondicionado</p></li>
                                    <li><p>Oficina</p></li>
                                    <li><p>Gimnasio</p></li>
                                    <li><p>Techo alto</p></li>
                                    <li><p>Chimenea</p></li>
                                    <li><p>Garaje</p></li>
                                    <li><p>Estufa de gas</p></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="amenidades" id="amenidades">
                            <div>
                                <ul>
                                    <li><p>Lavadora Secadora</p></li>
                                    <li><p>Garaje</p></li>
                                    <li><p>Isla de cocina</p></li>
                                    <li><p>Bar</p></li>
                                    <li><p>Chimenea</p></li>
                                    <li><p>Terraza</p></li>
                                    <li><p>Outdoor</p></li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><p>Vestidor</p></li>
                                    <li><p>Cine</p></li>
                                    <li><p>Biblioteca</p></li>
                                    <li><p>Chimenea</p></li>
                                    <li><p>Sala de juegos</p></li>
                                    <li><p>Sótano</p></li>
                                    <li><p>Cancha de Tenis</p></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mapa">
                    <h3>Explora la zona</h3>
                    <p>C. Sierra Quebrada 113, Fracc. Lomas de Mazatlán. Mazatlán, Sinalóa. México. </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5318143845757!2d-104.61561822473327!3d24.047569778468745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7a9ccf069a3%3A0x4c3297959e22d87c!2sCentro%20de%20Bachillerato%20Tecnol%C3%B3gico%20Industrial%20y%20de%20Servicios%20N%C3%BAmero%20110!5e0!3m2!1ses!2smx!4v1696602307107!5m2!1ses!2smx"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>  
                    
            </div>

            <div class="contacto_agente">

                <div>
                    <div class="agente">
                        <img src="img/perfil-placeholder.png" width="80px" height="80px">
                        <p>Contacta con nuestro agente <br>Javier Sosa</p>
                    </div>
                </div>

                <input type="text" placeholder="Nombre"> <br>

                <input type="email" placeholder="E-Mail"> <br>

                <div class="telefono" >
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            +51
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <input type="tel" placeholder="Teléfono">
                </div>

                <div class="mensaje">
                    <textarea name="" id="op0" cols="20" rows="5" placeholder="Escribe tu mensaje aquí o selecciona uno de los mensajes predeterminados marcados abajo." onclick="ch_bg_color('op0')"></textarea>
                    <div class="mensaje_sugerido">
                        <div id="op1" onclick="ch_bg_color('op1')">
                            <p>Programar una visita a la propiedad.</p>
                        </div>
                        <div id="op2" onclick="ch_bg_color('op2')">
                            <p>¿Todavía se encuentra disponible?</p>
                        </div>
                        <div id="op3" onclick="ch_bg_color('op3')">
                            <p>Recibir más información del inmueble.</p>
                        </div>
                    </div>
                </div>

                <input type="button" value="ENVIAR MENSAJE" id="enviar" onclick="ch_bg_color('op1')">
                
                <div id="checkbox">
                    <input type="checkbox" checked="true" > 
                    <p>Recibir notificaciones de propiedades que podrían interesarte.</p>
                </div>
                <div id="checkbox">
                    <input type="checkbox" checked="true" > 
                    <p>Estoy de acuerdo con los <a href="">terminos de uso</a> y <a href="">politicas de privacidad</a></p> 
                </div>
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/readmore.js"></script>
    <script src="js/sugeridos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<?php include 'footer.html'; ?>

</html>