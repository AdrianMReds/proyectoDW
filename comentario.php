<?php
	session_start();
	include('conexion.php');
	
	$contenido=$_POST['contenido'];

	if (strlen(str_replace(' ', '', $contenido)) >  0)
    {
	    mysqli_query($conexion,"insert into `comentarios` (contenido) values ('$contenido')");
    }
	header('location:index.html');
	
?>