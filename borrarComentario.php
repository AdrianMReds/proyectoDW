<?php
	$cID=$_GET['cID'];
	include('conexion.php');
	mysqli_query($conexion,"delete from `comentarios` where cID='$cID'");
	header('location:comentarios.php');
?>