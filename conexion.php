<?php 
$host="localhost";
$user="root";
$password="";
$db="codekraft";

$conexion = mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno())
  {
  echo "Fallo la Conexion con MySQL " . mysqli_connect_error();
  }
?>