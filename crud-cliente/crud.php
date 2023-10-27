<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo de influencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c18a7d19.js" crossorigin="anonymous"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="">
        <div class="row">
            <div class="col-12">
                <h1>Circulo de influencias</h1>
                <div class="d-flex">
                    <!--Button modal-->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#FormularioContacto">Agregar</button>
                    <!-- Modal -->
                    <div class="modal fade" id="FormularioContacto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar contacto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="registro.php" method="POST">
                                        <input name="nombre" class="form-control mb-3" type="text" placeholder="NOMBRE">
                                        <input name="apellido_1" class="form-control mb-3" type="text" placeholder="PATERNO">
                                        <input name="apellido_2" class="form-control mb-3" type="text" placeholder="MATERNO">
                                        <input name="telefono" class="form-control mb-3" type="text" placeholder="TELEFONO">
                                        <input name="correo" class="form-control mb-3" type="email" placeholder="CORREO">
<!--Actualizacion----------------------------------------------------------------->
                                        <textarea name="comentario" class="form-control" cols="30" rows="10"></textarea>
<!--------------------------------------------------------------------------------->
                                        <hr>
                                        <input name="registrar" class="btn" type="submit" value="Registrar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<!--Actualizacion----------------------------------------------------------------->
                    <form action="crud.php" method="POST">
                        <div class="d-flex">
                            <input class="form-control inputBuscar" name="inputBuscar" type="search" placeholder="Buscar">
                            <button class="btn form-control btnBuscar" type="submit" name="btnBuscar">Buscar</button>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filtros</button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="0" name="filtroOrden" id="orden_0">
                                            <label class="form-check-label" for="orden_0">A-Z</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="1" name="filtroOrden" id="orden_1">
                                            <label class="form-check-label" for="orden_1">Z-A</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="-1" name="filtroOrden" id="orden_2" checked>
                                            <label class="form-check-label" for="orden_2">X</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="0" name="filtroLlamado" id="llamado_0">
                                            <label class="form-check-label" for="llamado_0">Sin llamar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="1" name="filtroLlamado" id="llamado_1">
                                            <label class="form-check-label" for="llamado_1">Llamados</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="-1" name="filtroLlamado" id="llamado_2" checked>
                                            <label class="form-check-label" for="llamado_2">X</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="0" name="filtroContestado" id="contestado_0">
                                            <label class="form-check-label" for="contestado_0">Sin contestar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="1" name="filtroContestado" id="contestado_1">
                                            <label class="form-check-label" for="contestado_1">Contestados</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="-1" name="filtroContestado" id="contestado_2" checked>
                                            <label class="form-check-label" for="contestado_2">X</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="0" name="filtroInteresado" id="interesado_0">
                                            <label class="form-check-label" for="interesado_0">No interesados</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="1" name="filtroInteresado" id="interesado_1">
                                            <label class="form-check-label" for="interesado_1">Interesados</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="-1" name="filtroInteresado" id="interesado_2" checked>
                                            <label class="form-check-label" for="interesado_2">X</label>
                                        </div>
                                    </li>




                                </ul>
                            </div>
                        </div>
                    </form>
<!-------------------------------------------------------------------------------->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- MENSAJE DE ALERTA DE OPERACION-->
                <?php if(isset($_SESSION['mensaje'])){?>
                    <div class="alert alert-<?= $_SESSION['mensaje_tipo'];?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensaje']?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                <?php } 
                session_unset(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
<!--Actualizacion------------------------------------------------------------------------->
                <div class="card">
                    <div class="card-body">
<!---------------------------------------------------------------------------------------->
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">op</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Llamado</th>
                                    <th scope="col">Contestado</th>
                                    <th scope="col">Interesado</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">e-mail</th>
                                    <th scope="col">Comentarios</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM cliente";
                                    if(isset($_POST['btnBuscar'])){
                                        $buscar = $_POST['inputBuscar'];
                                        $order = intval($_POST['filtroOrden']);
                                        $llamado = intval($_POST['filtroLlamado']);
                                        $contestado = intval($_POST['filtroContestado']);
                                        $interesado = intval($_POST['filtroInteresado']);

                                        if(strlen($buscar) >= 1){
                                            $query = "SELECT * FROM cliente WHERE id_cliente = '$buscar' OR nombre LIKE '%$buscar%' OR apellido_1 LIKE '%$buscar%' OR apellido_2 LIKE '%$buscar%' OR correo LIKE '%$buscar%' OR telefono LIKE '%$buscar%'";
                                            if($llamado >= 0){
                                                $query .= " AND llamado = $llamado";
                                            }
                                            if($contestado >= 0){
                                                $query .= " AND contestado = $contestado";
                                            }
                                            if($interesado >= 0){
                                                $query .= " AND interesado = $interesado";
                                            }if($order == 0){
                                                $query .= " ORDER BY nombre, apellido_1 ASC";
                                            }else if($order == 1){
                                                $query .= " ORDER BY nombre, apellido_1 DESC";
                                            }
                                            
                                        }else if(strlen($buscar) == 0 AND ($llamado >= 0 or $contestado >= 0 or $interesado >= 0 or $order >= 0)){
                                            $query = "SELECT * FROM cliente WHERE";
                                            $contador = 0;
                                            if($llamado >= 0){
                                                $query .= " llamado = $llamado AND";
                                                ++$contador;
                                            }
                                            if($contestado >= 0){
                                                $query .= " contestado = $contestado AND";
                                                ++$contador;
                                            }
                                            if($interesado >= 0){
                                                $query .= " interesado = $interesado AND";
                                                ++$contador;
                                            }

                                            $posicion = strrpos($query, "AND");

                                            if ($posicion !== false) {
                                                $query = substr_replace($query, "", $posicion, strlen("AND"));
                                            }

                                            if($contador == 0 ){
                                                $posicion = strrpos($query, "WHERE");

                                                if ($posicion !== false) {
                                                    $query = substr_replace($query, "", $posicion, strlen("WHERE"));
                                                }
                                                if($order == 0){
                                                    $query .= " ORDER BY nombre, apellido_1 ASC";
                                                }else if($order == 1){
                                                    $query .= " ORDER BY nombre DESC, apellido_1 DESC";
                                                }
                                            }else if($contador > 0){
                                                if($order == 0){
                                                    $query .= " ORDER BY nombre, apellido_1 ASC";
                                                }else if($order == 1){
                                                    $query .= " ORDER BY nombre DESC, apellido_1 DESC";
                                                }
                                                $contador = 0;
                                            }
                                        }
                                    }   
                                    $resultado = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_assoc($resultado)) {
                                            $id = $row['id_cliente'];
                                        ?>
                                        <tr data-id="fila_<?php echo $id; ?>">
                                            <form action="editar.php?id=<?php echo $id; ?>" method="POST">
                                                <td>
                                                    <input type="checkbox">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <input class="btn btn-secondary editar" name="editar" type="button" value="Editar">
                                                        <input class="btn btn-primary guardar hidden" name="guardar" type="submit" value="Guardar"> 
                                                        <input class="btn btn-danger eliminar" name="eliminar" type="button" value="Eliminar">
                                                        <a class="btn btn-success confirmarEliminar hidden" name="confirmar" type="button" value="Confirmar" href="eliminar.php?id=<?php echo $id; ?>">Confirmar</a>
                                                        <input class="btn btn-danger cancelarEliminar hidden" name="cancelarEliminar" type="button" value="Cancelar">
                                                        <input class="btn btn-danger cancelarEditar hidden" name="cancelarEditar" type="button" value="Cancelar">
                                                    </div>
                                                </td>
                                                <td>
                                                    <label><?php echo $id; ?></label>
                                                </td>
                                                <td>
                                                    <label class="label_nombres"><?php echo $row['nombre']." ".$row['apellido_1']." ".$row['apellido_2']; ?></label>
                                                    <div class="d-flex">
                                                        <input class="form-control input_nombre hidden" type="text" class="form-control" name="Enombre" value="<?php echo $row['nombre']; ?>" placeholder="Nombres">
                                                        <input class="form-control input_apellido1 hidden" type="text" class="form-control" name="Eapellido_1" value="<?php echo $row['apellido_1']; ?>" placeholder="1° Apellido">
                                                        <input class="form-control input_apellido2 hidden" type="text" class="form-control" name="Eapellido_2" value="<?php echo $row['apellido_2']; ?>" placeholder="2° Apellido">
                                                    </div>
                                                </td>
<!--Actualizacion-------------------------------------------------------->
                                                <td>
                                                    <input class="checkLlamado" type="checkbox" name="llamado" data-id="<?php echo $id?>" <?php echo ($row['llamado'] == 1) ? 'checked' : ' '; ?> >
                                                </td>
                                                <td>
                                                    <input class="checkContestado" type="checkbox" name="contestado" data-id="<?php echo $id?>" <?php echo ($row['contestado'] == 1) ? 'checked' : ' '; ?>>
                                                </td>
                                                <td>
                                                    <input class="checkInteresado" type="checkbox" name="interesado" data-id="<?php echo $id?>" <?php echo ($row['interesado'] == 1) ? 'checked' : ' '; ?>>
                                                </td>
<!------------------------------------------------------------------------->
                                                <td>
                                                    <label class="label_telefono"><?php echo $row['telefono']; ?></label>
                                                    <input class="form-control input_telefono hidden" type="text" class="form-control" name="Etelefono" value="<?php echo $row['telefono']; ?>">
                                                </td>
                                                <td>
                                                    <label class="label_correo"><?php echo $row['correo']; ?></label>
                                                    <input class="form-control input_correo hidden" type="text" class="form-control" name="Ecorreo" value="<?php echo $row['correo']; ?>">
                                                </td>
<!--Actualizacion------------------------------------------------------------->
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $id; ?>">...</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal_<?php echo $id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Comentarios</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <textarea class="form-control" name="inputComentar" cols="30" rows="10"><?php echo $row['comentario']; ?></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn" name="comentar" type="submit">Guardar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
<!---------------------------------------------------------------------------->
                                            </form>
                                        </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="opciones.js"></script>
<!--Actualizacion----------------------------------------------------->
    <script src="estado.js"></script>
</body>
</html>