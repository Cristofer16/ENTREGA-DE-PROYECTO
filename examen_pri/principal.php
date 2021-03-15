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
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categorias.php">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buscador.php">Buscador General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="detalles.php">Detalles de publicación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Comentarios.php">Comentarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cerrar.php">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br><br><br><br><br>
            <div class="container">
                <center><h1 id="a">BIENVENIDO</h1></center>
                <center><h1 id="a">'.$_SESSION['user'].'</h1></center>
            </div>
        </body>
        </html>';
    else
        header("location: index.html");
?>