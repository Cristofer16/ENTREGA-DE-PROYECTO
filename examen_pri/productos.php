<?php
	session_start();
    if(isset($_SESSION['user'])){
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
            <title>Productos</title>
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
            </nav><br><br><br><br><br><br><br><br>
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-xl-8 col-lg-9 col-sm-11 col-12 bg-dark rounded">
                        <br><center><h1 class="text-white">Productos</h1></center>';
        include("coneccion.php");
        $sql="SELECT * from producto";
        $q=mysqli_query($conn,$sql);
        if(!$q)
            die("Error Consulta");
        echo "<table class='table table-dark table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>IMAGEN</th>
                        <th scope='col'>NOMBRE DEL PRODUCTO</th>
                        <th scope='col'>DETALLE</th>
                        <th scope='col'>PRECIO</th>
                        <th scope='col'>TELEFONO</th>
                        <th scope='col'>COMENTARIOS</th>
                    </tr>
                </thead>";
        while($row=mysqli_fetch_array($q)){
            echo "<tr>
                    <td><img src='pro/".$row[4]."' alt='producto'></td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                    <td>".$row[5]."</td>
                    <td><a style='color:white;' href='comentario.php?id=".$row[0]."'>cometarios</a></td>
                </tr>";
        }
        echo "</table>";
        mysqli_close($conn);
        echo '          <br>
                    </div>
                </div>
            </div>
        </body>
        </html>';
    }
    else
        header("location: index.html");
?>