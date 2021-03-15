<?php
    include("coneccion.php");
    session_start();
    if(!isset($_SESSION['user']))
        die("No tienes autorización");
    $idu=$_SESSION['id'];
    $nom=$_POST["nom"];
    $det=$_POST["det"];
	$pre=$_POST["pre"];
    $tel=$_POST["tel"];
	$file=$_FILES["file"]["name"];
    $ruta="pro/".$file;
    if(move_uploaded_file($_FILES["file"]["tmp_name"],$ruta)){
        $sql="INSERT INTO producto (nom_p,detalle,precio,img,telefono,id_u) VALUES('$nom','$det','$pre','$file','$tel','$idu')";
        $q=mysqli_query($conn,$sql);
        if(!$q)
            die("Error consulta");
        mysqli_close($conn);
        header("location: principal.php");
    }else
        die("Error en mover");
?>