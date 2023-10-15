<?php include("conn.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo de influencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c18a7d19.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="">
        <div class="row">
            <div class="col-12">
                <h1>Circulo de influencias</h1>
                <!-- Button trigger modal -->
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
                                    <input name="registrar" class="btn" type="submit" value="Registrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" placeholder="Buscar">
                <button class="btn">Buscar</button>
                <button class="btn">Filtros</button>
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
                <?php session_unset();}?>
            </div>
        </div>
        <div class="row">
            <div class="col">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM cliente";
                            $lista_clientes = mysqli_query($conn, $query);
                            
                            while($row = mysqli_fetch_assoc($lista_clientes)) { ?>
                                <?php
                                    $id = $row['id_cliente'];
                                ?>
                                <tr data-id="fila_<?php echo $id; ?>">
                                    <form action="editar.php?id=<?php echo $id; ?>" method="POST">
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-secondary editar" name="editar" type="button" style="display: none;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <input class="btn btn-primary guardar" name="guardar" type="submit" style="display: block;" value="Guardar"> 
                                                <a class="btn btn-danger eliminar" name="eliminar" type="button" style="display: block;" href="eliminar.php?id=<?php echo $id; ?>">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                                <a class="btn btn-success confirmar" name="confirmar" type="button" style="display: none;" >
                                                    <i class="fa-solid fa-check"></i>
                                                </a>
                                                <a class="btn btn-danger cancelar" name="cancelar" type="button" style="display: none;">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <label><?php $id; ?></label>
                                        </td>
                                        <td>
                                            <label id="label_nombres_<?php echo $row['id_cliente']?>" style="display: none;"><?php echo $row['nombre']." ".$row['apellido_1']." ".$row['apellido_2']; ?></label>
                                            <div class="d-flex">
                                                <input style="display: block;" type="text" class="form-control" name="Enombre" value="<?php echo $row['nombre']; ?>" placeholder="Nombres">
                                                <input style="display: block;" type="text" class="form-control" name="Eapellido_1" value="<?php echo $row['apellido_1']; ?>" placeholder="1° Apellido">
                                                <input style="display: block;" type="text" class="form-control" name="Eapellido_2" value="<?php echo $row['apellido_2']; ?>" placeholder="2° Apellido">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <label style="display: none;"><?php echo $row['telefono']; ?></label>
                                            <input style="display: block;" type="text" class="form-control" name="Etelefono" value="<?php echo $row['telefono']; ?>">
                                        </td>
                                        <td>
                                            <label style="display: none;"><?php echo $row['correo']; ?></label>
                                            <input style="display: block;" type="text" class="form-control" name="Ecorreo" value="<?php echo $row['correo']; ?>">
                                        </td>
                                    </form>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>