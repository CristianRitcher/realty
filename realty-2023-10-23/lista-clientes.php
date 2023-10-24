<?php include 'php/guardian.php'?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles_lc.css">
    <title>Lista Clientes</title>
</head>

<body>
    
        <header>
            <section class="container">
                <div class="logo-text-container">
                    <div>
                        <img class="Realty-logo" src="logo_sf.png" alt="Logo Realty">
                    </div>
                    <div class="text-container">
                        <div class="Realty">REALTY</div>
                        <div class="Bienes-raíces">BIENES RAÍCES</div>
                    </div>
                </div>
                <div class="acciones">
                    <div class="crear">
                        <button>CREAR</button>
                    </div>
                    <div class="editar">
                        <button>EDITAR</button>
                    </div>
                    <div class="eliminar">
                        <button>ELIMINAR</button>
                    </div>
                </div>
                <div>
                    <input type="text" id="busqueda" name="busqueda" placeholder="Búsqueda">
                </div>
            </section>
        </header>

        <div class="clientes">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="persona.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cliente1</h2>
                    <p>Informacion de cliente1</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="persona.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cliente2</h2>
                    <p>Informacion de cliente2</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="persona.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cliente3</h2>
                    <p>Informacion de cliente3</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>

        <div class="clientes">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="persona.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cliente4</h2>
                    <p>Informacion de cliente4</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="persona.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cliente5</h2>
                    <p>Inforamcion de cliente5</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="persona.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cliente6</h2>
                    <p>Inforamcion de cliente6</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
</body>
</html>
