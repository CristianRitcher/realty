<!-- include 'php/guardian.php'-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de propiedades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c18a7d19.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="css/crud-propiedades.css">
</head>

<?php include ('php/conn-vistas.php'); ?>
<?php include("navbar1.html");?>

<body>

<div class="">

    <div class="row">

        <div class="col">

            <!-- MENSAJE DE ALERTA DE OPERACION-->
            <?php if(isset($_SESSION['mensaje'])){?>
                <div class="alert alert-<?= $_SESSION['mensaje_tipo'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>

    </div>

    <div class="row" style="margin-top: 20px; text-align: right; margin-right: 10px;">

        <div class="col-12">
            <h1>Crud propiedades</h1>
            <div class="d-flex">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#FormularioPropiedad">Agregar Propiedad</button>

                <!-- Modal -->
                <div class="modal fade" id="FormularioPropiedad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Propiedad</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario para agregar propiedad -->
                                <form action="php/registro_propiedad.php" method="POST">
                                    <!-- Agrega aquí los campos necesarios para la propiedad -->
                                    <input name="titulo" class="form-control mb-3" type="text" placeholder="Título">
                                    <input name="pais" class="form-control mb-3" type="text" placeholder="País">
                                    <input name="estado" class="form-control mb-3" type="text" placeholder="Estado">
                                    <input name="municipio" class="form-control mb-3" type="text" placeholder="Municipio">
                                    <input name="codigo_postal" class="form-control mb-3" type="text" placeholder="Código postal">
                                    <input name="calle" class="form-control mb-3" type="text" placeholder="Calle">
                                    <input name="colonia" class="form-control mb-3" type="text" placeholder="Colonia">
                                    <input name="numero" class="form-control mb-3" type="text" placeholder="Número">
                                    <div class="mb-3">
                                        <select class="form-select" name="tipo_inmueble" id="tipo_inmueble">
                                            <!-- Opción de placeholder -->
                                            <option value="" disabled selected>Tipo de inmueble</option>
                                            <!-- Opciones reales -->
                                            <option value="Comercial">Comercial</option>
                                            <option value="Casa">Casa</option>
                                            <option value="Departamento">Departamento</option>
                                            <option value="Loft">Loft</option>
                                            <option value="Dúplex">Dúplex</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" name="tipo_contrato" id="tipo_contrato">
                                            <!-- Opción de placeholder -->
                                            <option value="" disabled selected>Tipo de contrato</option>
                                            <!-- Opciones reales -->
                                            <option value="Venta">Venta</option>
                                            <option value="Renta">Renta</option>
                                            <!-- Agrega más opciones si es necesario -->
                                        </select>
                                    </div>
                                    <input name="precio" class="form-control mb-3" type="number" placeholder="Precio">
                                    <input name="area" class="form-control mb-3" type="number" placeholder="Área">
                                    <input name="pisos" class="form-control mb-3" type="number" placeholder="Pisos">
                                    <input name="recamaras" class="form-control mb-3" type="number" placeholder="Recamaras">
                                    <input name="banos" class="form-control mb-3" type="number" placeholder="Baños">
                                    <input name="cocheras" class="form-control mb-3" type="number" placeholder="Cocheras">
                                    <div class="mb-3">
                                        <select class="form-select" name="piscina" id="piscina">
                                            <!-- Opción de placeholder -->
                                            <option value="" disabled selected>Piscina</option>
                                            <!-- Opciones reales -->
                                            <option value="Sí">Sí</option>
                                            <option value="No">No</option>
                                            <!-- Agrega más opciones si es necesario -->
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" name="jardin" id="jardin">
                                            <!-- Opción de placeholder -->
                                            <option value="" disabled selected>Jardín</option>
                                            <!-- Opciones reales -->
                                            <option value="Sí">Sí</option>
                                            <option value="No">No</option>
                                            <!-- Agrega más opciones si es necesario -->
                                        </select>
                                    </div>
                                    <div class="mb-3" id="jardin_area_container" style="display: none;">
                                        <input type="number" class="form-control" name="jardin_area" id="jardin_area" placeholder="Área del jardín">
                                    </div>
                                    <input name="descripcion" class="form-control mb-3" type="text" placeholder="Descripción">
                                    <!-- ... Agrega los demás campos ... -->
                                    <input name="registrar_propiedad" class="btn" type="submit" value="Registrar Propiedad">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filtrado y búsqueda -->
                <form action="crud-propiedades.php" method="POST">
                    <div class="d-flex">
                        <input class="form-control inputBuscar" name="inputBuscar" type="search" placeholder="Buscar">
                        <button class="btn form-control btnBuscar" type="submit" name="btnBuscar">Buscar</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col">

            <div class="card card-body">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Título</th>
                        <th scope="col">País</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Código postal</th>
                        <th scope="col">Calle</th>
                        <th scope="col">Colonia</th>
                        <th scope="col">Número</th>
                        <th scope="col">Tipo de inmueble</th>
                        <th scope="col">Tipo de contrato</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Área</th>
                        <th scope="col">Pisos</th>
                        <th scope="col">Recámaras</th>
                        <th scope="col">Baños</th>
                        <th scope="col">Cocheras</th>
                        <th scope="col">Jardin</th>
                        <th scope="col">Área del jardín</th>
                        <th scope="col">Piscina</th>
                        <th scope="col">Descripción</th>
                        <!-- ... Agrega los demás encabezados de columna ... -->
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // ... Modifica la consulta SQL para obtener propiedades ...
                    $query = "SELECT * FROM propiedades WHERE id_usuario = {$_SESSION['id_usuario']}";
                    if(isset($_POST['btnBuscar'])){
                        $buscar = $_POST['inputBuscar'];
                        if(strlen($buscar) >= 1){
                            $query = "SELECT * FROM propiedades WHERE id_usuario = {$_SESSION['id_usuario']} AND (id_propiedad = '$buscar' OR titulo LIKE '%$buscar%' OR pais LIKE '%$buscar%' OR estado LIKE '%$buscar%' OR municipio LIKE '%$buscar%' OR codigo_postal LIKE '%$buscar%' OR calle LIKE '%$buscar%' OR colonia LIKE '%$buscar%' OR tipo_inmueble LIKE '%$buscar%' OR tipo_contrato LIKE '%$buscar%' OR precio LIKE '%$buscar%' OR descripcion LIKE '%$buscar%')";
                        }
                    }   

                    $resultado = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($resultado)) {
                        $id_propiedad = $row['id_propiedad'];
                        ?>
                        <tr data-id="fila_<?php echo $id_propiedad; ?>">
                            <form action="php/editar_propiedad.php?id_propiedad=<?php echo $id_propiedad; ?>" method="POST">
                                <input type="hidden" name="id_propiedad" value="<?php echo $id_propiedad; ?>">
                                <!-- ... Agrega las celdas de datos para cada propiedad ... -->
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <label class="label_titulo"><?php echo $row['titulo']; ?></label>
                                    <input class="form-control input_titulo hidden" type="text" class="form-control" name="Etitulo" value="<?php echo $row['titulo']; ?>" placeholder="Título">
                                </td>
                                <td>
                                    <label class="label_pais"><?php echo $row['pais']; ?></label>
                                    <input class="form-control input_pais hidden" type="text" class="form-control" name="Epais" value="<?php echo $row['pais']; ?>" placeholder="País">
                                </td>
                                <td>
                                    <label class="label_estado"><?php echo $row['estado']; ?></label>
                                    <input class="form-control input_estado hidden" type="text" class="form-control" name="Eestado" value="<?php echo $row['estado']; ?>" placeholder="Estado">
                                </td>
                                <td>
                                    <label class="label_municipio"><?php echo $row['municipio']; ?></label>
                                    <input class="form-control input_municipio hidden" type="text" class="form-control" name="Emunicipio" value="<?php echo $row['municipio']; ?>" placeholder="Municipio">
                                </td>
                                <td>
                                    <label class="label_codigo_postal"><?php echo $row['codigo_postal']; ?></label>
                                    <input class="form-control input_codigo_postal hidden" type="text" class="form-control" name="Ecodigo_postal" value="<?php echo $row['codigo_postal']; ?>" placeholder="Código postal">
                                </td>
                                <td>
                                    <label class="label_calle"><?php echo $row['calle']; ?></label>
                                    <input class="form-control input_calle hidden" type="text" class="form-control" name="Ecalle" value="<?php echo $row['calle']; ?>" placeholder="Calle">
                                </td>
                                <td>
                                    <label class="label_colonia"><?php echo $row['colonia']; ?></label>
                                    <input class="form-control input_colonia hidden" type="text" class="form-control" name="Ecolonia" value="<?php echo $row['colonia']; ?>" placeholder="Colonia">
                                </td>
                                <td>
                                    <label class="label_numero"><?php echo $row['numero']; ?></label>
                                    <input class="form-control input_numero hidden" type="text" class="form-control" name="Enumero" value="<?php echo $row['numero']; ?>" placeholder="Número">
                                </td>
                                <td>
                                    <label class="label_tipo_inmueble"><?php echo $row['tipo_inmueble']; ?></label>
                                    <input class="form-control input_tipo_inmueble hidden" type="text" class="form-control" name="Etipo_inmueble" value="<?php echo $row['tipo_inmueble']; ?>" placeholder="Tipo de inmueble">
                                </td>
                                <td>
                                    <label class="label_tipo_contrato"><?php echo $row['tipo_contrato']; ?></label>
                                    <input class="form-control input_tipo_contrato hidden" type="text" class="form-control" name="Etipo_contrato" value="<?php echo $row['tipo_contrato']; ?>" placeholder="Tipo de contrato">
                                </td>
                                <td>
                                    <label class="label_precio"><?php echo $row['precio']; ?></label>
                                    <input class="form-control input_precio hidden" type="number" class="form-control" name="Eprecio" value="<?php echo $row['precio']; ?>" placeholder="Precio">
                                </td>
                                <td>
                                    <label class="label_area"><?php echo $row['area']; ?></label>
                                    <input class="form-control input_area hidden" type="number" class="form-control" name="Earea" value="<?php echo $row['area']; ?>" placeholder="Aréa">
                                </td>
                                <td>
                                    <label class="label_pisos"><?php echo $row['pisos']; ?></label>
                                    <input class="form-control input_pisos hidden" type="number" class="form-control" name="Episos" value="<?php echo $row['pisos']; ?>" placeholder="Pisos">
                                </td>
                                <td>
                                    <label class="label_recamaras"><?php echo $row['recamaras']; ?></label>
                                    <input class="form-control input_recamaras hidden" type="number" class="form-control" name="Erecamaras" value="<?php echo $row['recamaras']; ?>" placeholder="Recámaras">
                                </td>
                                <td>
                                    <label class="label_banos"><?php echo $row['banos']; ?></label>
                                    <input class="form-control input_banos hidden" type="number" class="form-control" name="Ebanos" value="<?php echo $row['banos']; ?>" placeholder="Baños">
                                </td>
                                <td>
                                    <label class="label_cocheras"><?php echo $row['cocheras']; ?></label>
                                    <input class="form-control input_cocheras hidden" type="number" class="form-control" name="Ecocheras" value="<?php echo $row['cocheras']; ?>" placeholder="Cocheras">
                                </td>
                                <td>
                                    <label class="label_jardin"><?php echo $row['jardin']; ?></label>
                                    <input class="form-control input_jardin hidden" type="text" class="form-control" name="Ejardin" value="<?php echo $row['jardin']; ?>" placeholder="Jardin">
                                </td>
                                <td>
                                    <label class="label_jardin_area"><?php echo $row['jardin_area']; ?></label>
                                    <input class="form-control input_jardin_area hidden" type="text" class="form-control" name="Ejardin_area" value="<?php echo $row['jardin_area']; ?>" placeholder="Jardin aréa">
                                </td>
                                <td>
                                    <label class="label_piscina"><?php echo $row['piscina']; ?></label>
                                    <input class="form-control input_piscina hidden" type="text" class="form-control" name="Episcina" value="<?php echo $row['piscina']; ?>" placeholder="Piscina">
                                </td>
                                <td>
                                    <label class="label_descripcion"><?php echo $row['descripcion']; ?></label>
                                    <input class="form-control input_descripcion hidden" type="text" class="form-control" name="Edescripcion" value="<?php echo $row['descripcion']; ?>" placeholder="Descripción">
                                </td>
                                <!-- ... Agrega las demás celdas de datos ... -->
                                <td>
                                    <div class="d-flex">
                                        <input class="btn btn-secondary editar" name="editar" type="button" value="Editar">
                                        <input class="btn btn-primary guardar hidden" name="guardar" type="submit" value="Guardar">
                                        <input class="btn btn-danger cancelarEditar hidden" name="cancelarEditar" type="button" value="Cancelar">
                                        <button type="button" class="btn btn-primary eliminar" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id-propiedad="<?php echo $id_propiedad; ?>">Eliminar</button>
                                    </div>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar registro</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>¿Esta seguro que desea eliminar el registro?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-success confirmarEliminar" name="confirmar" type="button" value="Confirmar" href="#">Confirmar</a>
                                                    <input class="btn btn-danger cancelarEliminar" data-bs-dismiss="modal" aria-label="Close" name="cancelarEliminar" type="button" value="Cancelar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/opciones_propiedades.js"></script>
<script>
    document.getElementById('jardin').addEventListener('change', function () {
        var jardinAreaContainer = document.getElementById('jardin_area_container');
        jardinAreaContainer.style.display = this.value === 'Sí' ? 'block' : 'none';
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var eliminarBtns = document.querySelectorAll('.eliminar');
        
        eliminarBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var idPropiedad = this.getAttribute('data-id-propiedad');
                var confirmarEliminarBtn = document.querySelector('.confirmarEliminar');
                confirmarEliminarBtn.setAttribute('href', 'php/eliminar-propiedad.php?id_propiedad=' + idPropiedad);
            });
        });
    });
</script>
</body>

<?php include("footer.html");?>

</html>