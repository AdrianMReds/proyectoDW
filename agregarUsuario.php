<?php
	include('conexion.php');
	$username=$_POST['username'];
    $password=$_POST['password1'];
    $password2=$_POST['password2'];

    if ($password == $password2){
	    mysqli_query($conexion,"insert into users (username, password) values ('$username', '$password')");
    }
	header('location:usuarios.php');
?>