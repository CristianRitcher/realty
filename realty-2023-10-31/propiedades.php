<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- No recuerdo si era del rango de precios -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- script de num de pagina -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/propiedades2.css">
</head>

<?php include 'navbar1.html' ?>

<body>
    <div class="contenido">
    <div class="row no-gutters">
        <div class="col-md-3">
            <div class="filtros">
                <h4>Filtros de Búsqueda</h4>
                <!-- Inicio de rango de precios -->
                <div class="container">
                    <h5>Rango de Precios</h5>
                    <form>
                        <div class="form-group">
                            <label for="precioMinimo">Precio Mínimo:</label> <br>
                            <input type="range" class="form-control-range" id="precioMinimo" name="precioMinimo" min="0"
                                max="100">
                            <output for="precioMinimo">50</output>
                        </div>
                        <div class="form-group">
                            <label for="precioMaximo">Precio Máximo:</label> <br>
                            <input type="range" class="form-control-range" id="precioMaximo" name="precioMaximo" min="0"
                                max="100">
                            <output for="precioMaximo">50</output>
                        </div>
                    </form>
                </div>
                <!-- Agrega la referencia a Bootstrap JS y jQuery -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                    // JavaScript para mostrar el valor actual del rango
                    const precioMinimo = document.getElementById("precioMinimo");
                    const precioMaximo = document.getElementById("precioMaximo");
                    const outputMinimo = document.querySelector("output[for=precioMinimo]");
                    const outputMaximo = document.querySelector("output[for=precioMaximo]");

                    precioMinimo.addEventListener("input", () => {
                        outputMinimo.textContent = precioMinimo.value;
                    });

                    precioMaximo.addEventListener("input", () => {
                        outputMaximo.textContent = precioMaximo.value;
                    });
                </script>
                <!-- Terminacion de rango de precios -->
                <div class="filtro">
                    <label for="habitaciones">Habitaciones:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                </div>
                <div class="filtro">
                    <label for="camas">Camas:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4</option>
                    </select>
                </div>
                <div class="filtro">
                    <label for="banos">Baños:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                </div>

                <div class="filtro">
                    <label for="huespedes">Huéspedes:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="9">8+</option>
                    </select>
                </div>
                <hr>
                <a id="viewp" href="#youtube.com" class="btn btn-primary">Aplicar filtros</a>
            </div>
        </div>

        <div class="col-md-9">
            <!-- Silider -->
			<div id="slider" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" >
					<div class="carousel-item active">
						<img src="img/img_top_1.jpg" class="d-block w-100" alt="" id="i1">
						<!-- texto en el principio -->
						<div id="text-portada" class="carousel-caption text-left">
							<h1>Alojamiento entero: residencia en Mazatlán, México</h1>
							<p>Más de 16 huéspedes - 3 habitaciones - 7 camas - 2 baños completos y uno de tocador</p>
							<p><a class="btn btn-lg btn-primary" id="boton-p1" href="#" role="button">Ver propiedad</a>
							</p>
						</div>
						<!-- termina el texto  -->
					</div>
					<div class="carousel-item ">
						<img src="img/Img_top_2.jpg" class="d-block w-100" alt="">
						<!-- texto en el principio -->
						<div id="text-portada-1" class="carousel-caption text-left" id="i1">
							<h1>Alojamiento entero: residencia en Mazatlán, México</h1>
							<p>Más de 16 huéspedes - 3 habitaciones - 7 camas - 2 baños completos y uno de tocador</p>
							<p><a class="btn btn-lg btn-primary" id="boton-p1" href="#" role="button">Ver propiedad</a>
							</p>
						</div>
						<!-- termina el texto  -->
					</div>
					<div class="carousel-item ">
						<img src="img/img_top_3.png" class="d-block w-100" alt="" id="i1">
						<!-- texto en el principio -->
						<div id="text-portada-2" class="carousel-caption text-left">
							<h1>Alojamiento entero: residencia en Mazatlán, México</h1>
							<p>Más de 16 huéspedes - 3 habitaciones - 7 camas - 2 baños completos y uno de tocador</p>
							<p><a class="btn btn-lg btn-primary" id="boton-p1" href="propiedad-ficha.php" role="button">Ver propiedad</a>
							</p>
						</div>
						<!-- termina el texto  -->
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

            <!-- Grupo de cartas 1 -->
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

			<!-- Grupo de cartas 2 -->
			<div class="card-deck">
				<!-- card 1  -->
				<div class="card">
					<!-- carousel -->
					<div id="slider-4" class="carousel slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/tercera_habitacion_mzt_1.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/tercera_habitacion_mzt_2.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/tercera_habitacion_mzt_3.png" class="d-block w-100" alt="">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#slider-4"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider-4"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<!-- fin carousel  -->

					<div class="card-body">
						<h5 class="card-title">Alojamiento entero: vivienda rentada en Mazatlán, México</h5>
						<p class="card-text">2 huéspedes - 1 habitación - 1 cama - 1 baño</p>
						<!-- precios de propiedades  -->
						<p class="precios"><strong>$1710</strong> por noche</p>
						<!-- boton ver propiedades  -->
						<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
					</div>
				</div>
				<!-- card 2  -->
				<div class="card">
					<!-- carousel -->
					<div id="slider-5" class="carousel slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/cuarta_habitacion_mzt_1.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/cuarta_habitacion_mzt_2.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/cuarta_habitacion_mzt_3.png" class="d-block w-100" alt="">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#slider-5"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider-5"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<!-- fin carousel  -->

					<div class="card-body">
						<h5 class="card-title">Alojamiento entero: condominio en Mazatlán, México</h5>
						<p class="card-text">6 huéspedes - 2 habitaciones3 camas - 2 baños</p>
						<!-- precios de propiedades  -->
						<p class="precios"><strong>$1980</strong> por noche</p>
						<!-- boton ver propiedades  -->
						<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
					</div>
				</div>
				<!-- card 3  -->
				<div class="card">
					<!-- carousel -->
					<div id="slider-6" class="carousel slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/quinta_habitacion_mzt_1.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/quinta_habitacion_mzt_2.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/quinta_habitacion_mzt_3.png" class="d-block w-100" alt="">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#slider-6"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider-6"
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
						<p class="precios"><strong>$2120</strong> por noche</p>
						<!-- boton ver propiedades  -->
						<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
					</div>
				</div>
			</div>

			<!-- Grupo de cartas 3 -->
			<div class="card-deck">
				<!-- card 1  -->
				<div class="card">
					<!-- carousel -->
					<div id="slider-7" class="carousel slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/sexta_habitacion_mzt_1.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/sexta_habitacion_mzt_2.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/sexta_habitacion_mzt_3.png" class="d-block w-100" alt="">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#slider-7"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider-7"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<!-- fin carousel  -->

					<div class="card-body">
						<h5 class="card-title">Alojamiento entero: condominio en Mazatlán, México</h5>
						<p class="card-text">7 huéspedes - 2 habitaciones - 3 camas - 2 baños</p>
						<!-- precios de propiedades  -->
						<p class="precios"><strong>$1609</strong> por noche</p>
						<!-- boton ver propiedades  -->
						<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
					</div>
				</div>
				<!-- card 2  -->
				<div class="card">
					<!-- carousel -->
					<div id="slider-8" class="carousel slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/septima_habitacion_mzt_1.1.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/septima_habitacion_mzt_2.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/septima_habitacion_mzt_3.png" class="d-block w-100" alt="">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#slider-8"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider-8"
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
						<p class="precios"><strong>$1570</strong> por noche</p>
						<!-- boton ver propiedades  -->
						<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
					</div>
				</div>
				<!-- card 3  -->
				<div class="card">
					<!-- carousel -->
					<div id="slider-9" class="carousel slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/octava_habitacion_mzt_1.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/octava_habitacion_mzt_2.png" class="d-block w-100" alt="">
							</div>
							<div class="carousel-item ">
								<img src="img/octava_habitacion_mzt_3.png" class="d-block w-100" alt="">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#slider-9"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider-9"
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
						<p class="precios"><strong>$1860</strong> por noche</p>
						<!-- boton ver propiedades  -->
						<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
					</div>
				</div>
			</div>
            
            <!-- Num. pagina  -->
            <div class="paginacion">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" id="pagination_color" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" id="pagination_color" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" id="pagination_color" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" id="pagination_color" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" id="pagination_color" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
        
        
    </div>
</body>

<?php include 'footer.html' ?>

</html>