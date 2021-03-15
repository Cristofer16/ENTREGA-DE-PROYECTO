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
                            <a class="nav-link" href="registrar_mus.php">Registrar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="reproducir.php">Reproducir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cerrar.php">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br><br>
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-xl-8 col-lg-9 col-sm-11 col-12 bg-dark rounded">
                        <br><center><h1 class="text-white">Canciones</h1></center>';
        include("coneccion.php");
        $id=$_SESSION['id'];
        $sql="select * from musica where id_u='$id'";
        $q=mysqli_query($conn,$sql);
        if(!$q)
            die("Error Consulta");
        echo "<table class='table table-dark table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>ARTISTA</th>
                        <th scope='col'>TEMA</th>
                        <th scope='col'>CANCIÓN</th>
                    </tr>
                </thead>";
        while($row=mysqli_fetch_array($q)){
            echo "<tr>
                    <td>".$row[2]."</td>
                    <td>".$row[1]."</td>
                    <td><audio controls><source src='audio/".$row[3]."'></audio controls></td>
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