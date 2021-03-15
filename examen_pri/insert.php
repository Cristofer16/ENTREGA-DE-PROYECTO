<?php
	include("coneccion.php");
	$nom=$_POST["nom"];
	$ap=$_POST["ap"];
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$sql="INSERT INTO usuario (nombre,apellido,user,pass) VALUES('$nom','$ap','$user','$pass')";
	$q=mysqli_query($conn,$sql);
	if(!$q)
		die("Error");
    mysqli_close($conn);
	header("location: index.html");
?>