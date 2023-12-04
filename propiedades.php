<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your additional scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your custom stylesheets -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/propiedades2.css">

</head>

<?php include 'navbar1.html' ?>

<body>
    <div class="contenido">
		
		<div class="row no-gutters">

			<!-- Filtros -->
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

				<?php 
					$contador = 1;
					include 'php/conn.php';
					$query = 'SELECT * FROM propiedades';
					$resultado = mysqli_query($conn, $query);
					while ($row = mysqli_fetch_assoc($resultado)) {
				?>
					<!-- Grupo de cartas -->
					<?php 
						if ($contador == 1) {
							echo "<div class=\"card-deck\">";
						}
					?> 
					
						<!-- card 1  -->
						<div class="card">
							<!-- carousel -->
							<div id="slider-<?php echo $contador; ?>" class="carousel slide">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="img/<?php echo $row['foto1'] ?>" class="d-block w-100" alt="">
									</div>
									<div class="carousel-item ">
										<img src="img/<?php echo $row['foto2'] ?>" class="d-block w-100" alt="">
									</div>
									<div class="carousel-item ">
										<img src="img/<?php echo $row['foto3'] ?>" class="d-block w-100" alt="">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#slider-<?php echo $contador; ?>"
									data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#slider-<?php echo $contador; ?>"
									data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
							<!-- fin carousel  -->

							<div class="card-body">
								<h5 class="card-title"><?php echo $row['titulo'] ?></h5>
								<p class="card-text"><?php echo $row['estado'].', '.$row['pais'] ?> - <?php echo $row['recamaras'] ?> recamaras - <?php echo $row['banos'] ?> baños - <?php echo $row['cocheras'] ?> cocheras</p>
								<!-- precios de propiedades  -->
								<p class="precios"><strong><?php echo '$'.$row['precio'] ?></strong> por noche</p>
								<!-- boton ver propiedades  -->
								<form action="propiedad-ficha.php?id=<?php echo $row['id_propiedad'] ?>" method="POST" id="boton_ver">
									<button type="submit" id="viewp" class="btn btn-primary">Ver propiedad</button>
								</form>
							</div>
						</div>
					
					<?php 
						if ($contador == 3) {
							echo "</div>";
						}
						$contador += 1;
					?>

				<?php } ?>

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

    </div>

</body>

<?php include 'footer.html' ?>

</html>
