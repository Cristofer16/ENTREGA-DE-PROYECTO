<?php
	session_start();
    if(isset($_SESSION['user']))
        echo '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/estilo_prin.css">
            <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <title>principal</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="principal.php">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php">Registrar producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cerrar.php">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br><br>
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-xl-6 col-lg-7 col-sm-8 col-10 bg-dark rounded">
                        <br><center><h1 class="text-white">Regístrar  Canción</h1></center>
                        <form action="in.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="text-white">Nombre del producto:</label><br>
                                <input class="form-control" type="text" name="nom" placeholder="piano" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Detalles:</label><br>
                                <input class="form-control" type="text" name="det" placeholder="información" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Precio:</label><br>
                                <input class="form-control" type="text" name="pre" placeholder="60" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Telefono de contacto:</label><br>
                                <input class="form-control" type="text" name="tel" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">inserte imagen:</label><br>
                                <input style="color:white;" type="file" name="file" required>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-secondary" value="Insertar">
                                <a href="productos.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                            </center>
                        </form><br>
                    </div>
                </div>
            </div>
        </body>
        </html>';
    else
        header("location: index.html");
?>