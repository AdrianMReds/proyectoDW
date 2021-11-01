<?php 

include "conexion.php";
session_start();
if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from users where username='".$username."'AND password='".$password."' limit 1";
    
    $result = mysqli_query($conexion, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Codekraft</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div id="logo" style="width: 30%;">Logo</div>
		<nav>
			<a href="index.html">Inicio</a>
			<a href="cursos.html">Cursos</a>
			<a href="login.php">Login</a>
		</nav>
	</header>

	<main class="mlogin">
		<h1 style="text-align: center; width: 100%;">Login</h1>
		<form class="flogin" method="POST" action="#">
			<div class="login">
				<label>Username: </label>
				<input type="text" placeholder="Ingresa tu username" name="username" required>
				<label>Password: </label>
				<input type="text" placeholder="Ingresa tu password" name="password" required>
				<button class="blogin" type="submit">Login</button>
			</div>
		</form>
		
		<?php
			if (isset($username)) {
				if (mysqli_num_rows($result)!=1){
					echo "<h2>Usuario o Contraseña Inválido";
					echo "<a href= 'admin.html'> <button>Administrar Cursos</button></a>";
				}
				else {
					echo "<h2>\n\tBienvenido ".$username."</h2>";
					$_SESSION['login'] = $username;
				}
			}
		 ?>
	</main>
	<footer><p>&copy; Codekraft</p></footer>
</body>
</html>