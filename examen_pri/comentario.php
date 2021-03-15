<?php
	session_start();
    $id_c=$_GET['id'];
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
            <title>Comentario</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar_com.php">Comentar</a>
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
        $sqlp="SELECT * from producto";
        $qp=mysqli_query($conn,$sqlp);
        if(!$qp)
            die("Error Consulta producto");
        if($rowc=mysqli_fetch_row($qp))
            echo '<br><center><h2 class="text-white">'.$rowc[1].'</h2></center>
                    <br><center><img src="pro/'.$rowc[4].' alt="producto"></center>';
        $sqlc="SELECT * from comentraio";
        $qc=mysqli_query($conn,$sqlc);
        if( !$qc)
            die("Error Consulta comentario");
        echo "<table class='table table-dark table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>COMENTARIOS</th>
                    </tr>
                </thead>";
        while($rowc=mysqli_fetch_array($qc)){
            echo "<tr>
                    <td>".$row[1]."</td>
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