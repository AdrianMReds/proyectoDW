<?php 

include "conexion.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Codekraft</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/computer.ico">
    <style>
    a {
        color: white;
    }
    </style>
</head>

<body>

    <header>
        <div id="logo" style="width: 30%;">
        <img src="img/happy.png" style="width:120px">
        </div>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="cursos.html">Cursos</a>
            <a href="contactanos.html">Contáctanos</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <main style="margin-left: auto; margin-right: auto; color: white;">
        <h1 style="text-align: center; width: 100%;">Usuarios</h1>
        <br>
        <table border=1>
            <thead>
                <th>Usuario</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
					include('conexion.php');
					$query=mysqli_query($conexion,"select * from `users`");
					while($fila=mysqli_fetch_array($query)){
						?>
                <tr>
                    <td><?php echo $fila['username']; ?></td>
                    <td>
                        <a href="borrarUsuario.php?username=<?php echo $fila['username']; ?>">Borrar</a>
                    </td>
                </tr>
                <?php
					}
				?>
            </tbody>
        </table>
        <br>
        <h3>Agrega un nuevo Administrador</h3>
        <br>
        <form method="POST" action="agregarUsuario.php">
			<label>Username:</label>
            <br>
            <input type="text" name="username">
            <br>
			<label>Contraseña:</label>
            <br>
            <input id="password1" type="password" name="password1">
			<br>
            <label>Repetir Contraseña:</label>
            <br>
            <input id="password2" type="password" name="password2">
            <br>
			<br>
			<button type="submit" onclick="checkPassword()">Agregar</button>
		</form>

    </main>
    <footer>
        <br>
        <p>&copy; Codekraft</p>
    </footer>
    <script>
		function checkPassword() {
		  var password1 = document.getElementById("password1").value;
          var password2 = document.getElementById("password2").value;
          if (password1.length < 6){
              alert("La contraseña debe tener 6 o mas caracteres")
          }
		  else if (password1 != password2)
		  {
			alert("Las contraseñas no son iguales");
		  }
		  else {
			alert("Usuario agregado exitosamente");  
		  }
		}
		</script>
</body>

</html>