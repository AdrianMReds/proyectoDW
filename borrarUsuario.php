<?php
	$username=$_GET['username'];
	include('conexion.php');
	mysqli_query($conexion,"delete from `users` where username='$username'");
	header('location:usuarios.php');
?>