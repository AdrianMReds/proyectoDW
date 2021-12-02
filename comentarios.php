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
    <style>
    a {
        color: white;
    }
    </style>
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

    <main style="margin-left: auto; margin-right: auto; color: white;">
        <h1 style="text-align: center; width: 100%;">Comentarios</h1>
        <br>
        <table border=1>
            <thead>
                <th>Comentario</th>
                <th>Fecha</th>
            </thead>
            <tbody>
                <?php
					include('conexion.php');
					$query=mysqli_query($conexion,"select * from `comentarios`");
					while($fila=mysqli_fetch_array($query)){
						?>
                <tr>
                    <td><?php echo $fila['contenido']; ?></td>
                    <td><?php echo $fila['fecha']; ?></td>
                    <td>
                        <a href="borrarComentario.php?cID=<?php echo $fila['cID']; ?>">Borrar</a>
                    </td>
                </tr>
                <?php
					}
				?>
            </tbody>
        </table>

    </main>
    <footer>
        <br>
        <p>&copy; Codekraft</p>
    </footer>
</body>

</html>