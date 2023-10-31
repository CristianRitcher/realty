<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- No recuerdo si era del rango de precios -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- script de num de pagina -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/index2.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<?php include 'navbar1.html'?>

<body>
    <div class="row no-gutter">

        <!-- Cuadro de busqueda/filtros -->
            <div class="col-md-6">
                    <div class="busqueda">
                        <form method="post">
                            <!-- check boxes -->
                            <div class="d-flex justify-content-between align-items-center" id="tipo">
                                <div>
                                    <p><strong>TIPO:</strong></p>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" name="venta" type="checkbox" value="" id="">
                                    <label class="form-check-label">VENTA</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" name="renta" type="checkbox" value="" id="">
                                    <label class="form-check-label">RENTA</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="">
                                    <label class="form-check-label">TRASPASO</label>
                                </div>
                            </div>
                            <!-- tipo de inmueble -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">TIPO DE INMUEBLE</span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>SELECCIONA UNA OPCION...</option>
                                    <option value="1">CASA</option>
                                    <option value="2">DEPARTAMENTO</option>
                                    <option value="3">LOFT</option>
                                    <option value="3">CONDOMINIO</option>
                                </select>
                            </div>
                            <!-- ubicación -->
                            <div class=" input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">UBICACION</span>
                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                            </div>
                            <!-- otros filtros -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">PRECIO $</span>
                                        <input type="number" class="form-control" id="numeroInfinito" step="any">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">CUARTOS</span>
                                        <input type="number" class="form-control" id="numeroInfinito" step="any">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">AREA</span>
                                        <input type="number" class="form-control" id="numeroInfinito" step="any">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">TAMAÑO</span>
                                        <input type="number" class="form-control" id="numeroInfinito" step="any">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">BAÑOS</span>
                                        <input type="number" class="form-control" id="numeroInfinito" step="any">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">ESTACIONAMIENTO</span>
                                        <input type="number" class="form-control" id="numeroInfinito" step="any">
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <a href="propiedades.php"><button class="btn-search btn" type="button"
                                            id="boton-buscar">BUSCAR</button></a>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        <!-- Fin: Cuadro de busqueda/filtros -->

        <!-- Mapa -->
            <div class="col-md-6" id="mapa">
                <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5318143845757!2d-104.61561822473327!3d24.047569778468745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7a9ccf069a3%3A0x4c3297959e22d87c!2sCentro%20de%20Bachillerato%20Tecnol%C3%B3gico%20Industrial%20y%20de%20Servicios%20N%C3%BAmero%20110!5e0!3m2!1ses!2smx!4v1696602307107!5m2!1ses!2smx"
                    width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>
        <!-- Fin: Mapa -->

    </div>

    <!-- Grupo de cartas -->
        <div class="card-deck">
            <!-- card 1  -->
            <div class="card">
                <!-- carousel -->
                <div id="slider-1" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/habitacio_mazatlan_1.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/habitacio_mazatlan_2.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/habitacio_mazatlan_3.png" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider-1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider-1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- fin carousel  -->

                <div class="card-body">
                    <h5 class="card-title">Alojamiento entero: vivienda rentada en Mazatlán, México</h5>
                    <p class="card-text">8 huéspedes - 4 habitaciones - 6 camas - 3 baños</p>
                    <!-- precios de propiedades  -->
                    <p class="precios"><strong>$2100</strong> por noche</p>
                    <!-- boton ver propiedades  -->
                    <a id="viewp" href="propiedad-ficha.php" class="btn btn-primary">Ver propiedad</a>
                </div>
            </div>
            <!-- card 2  -->
            <div class="card">
                <!-- carousel -->
                <div id="slider-2" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/segunda_habitacion_mzt_1.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/segunda_habitacion_mzt_2.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/segunda_habitacion_mzt_3.png" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider-2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider-2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- fin carousel  -->

                <div class="card-body">
                    <h5 class="card-title">Alojamiento entero: vivienda rentada en Mazatlán, México</h5>
                    <p class="card-text">4 huéspedes - 2 habitaciones - 2 camas - 2 baños</p>
                    <!-- precios de propiedades  -->
                    <p class="precios"><strong>$2360</strong> por noche</p>
                    <!-- boton ver propiedades  -->
                    <a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
                </div>
            </div>
            <!-- card 3  -->
            <div class="card">
                <!-- carousel -->
                <div id="slider-3" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/habitacio_mazatlan_3.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/habitacio_mazatlan_1.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/habitacio_mazatlan_2.png" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider-3"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider-3"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- fin carousel  -->

                <div class="card-body">
                    <h5 class="card-title">Alojamiento entero: condominio en Mazatlán, México</h5>
                    <p class="card-text">8 huéspedes - 4 habitaciones - 6 camas - 3 baños</p>
                    <!-- precios de propiedades  -->
                    <p class="precios"><strong>$1820</strong> por noche</p>
                    <!-- boton ver propiedades  -->
                    <a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
                </div>
            </div>
        </div>
    <!-- Fin: Grupo de cartas -->

    <!-- Mensaje de bienvenida -->
        <div class="row" id="bienvenida">
            <img src="img/realty_logo_r.svg" id="logo-bienvenida">
            <h2>BIENVENIDO A REALTY: LA PUERTA DE ENTRADA A TU NUEVO HOGAR</h2>
            <p>
                En realty, entendemos que un hogar no es solo un hogar, es un sueño hecho realidad. Nuestra misión es
                ayudarte a encontrar la propiedad perfecta que se ajuste a tu estilo de vida y nececidades. Con años
                de experiencia en bienes raíces, ofrecemos una amplia gama de opciones que van desde lujosas recidencias
                hasta acogedores departamentos, todos diseñados para brindate la vida que mereces.
            </p>
        </div>
    <!-- Fin: Mensaje de bienvenida -->

</body>

<?php include 'footer.html'?>

</html>