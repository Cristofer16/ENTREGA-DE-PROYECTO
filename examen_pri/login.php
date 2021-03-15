<?php
	session_start();
	include("coneccion.php");
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$sql="SELECT * FROM `usuario` where user='$user' and pass='$pass'";
	$q=mysqli_query($conn,$sql);
	if (!isset($q))
		die("Error");
	if($row=mysqli_fetch_row($q)){
		$_SESSION['id']=$row[0];
        $_SESSION['user']=$row[3];
		$_SESSION['pass']=$row[4];
		header("location: principal.php");
	}
	else
        header("location: index.html");
	mysqli_close($conn);
?>
