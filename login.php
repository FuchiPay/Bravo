<?php

// Establece las credenciales de conexión a la base de datos
$dbhost = "localhost"; // Nombre del servidor de la base de datos
$dbuser = "root"; // Nombre de usuario de la base de datos
$dbpass = ""; // Contraseña de la base de datos
$dbname = "test"; // Nombre de la base de datos

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"]; 
$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '" . $nombre . "' and password = '" . $pass . "'");

$nr = mysqli_num_rows($query);	

if ($nr == 1) {
    echo "Bienvenido Vendedor: " . $nombre;
} else if ($nr == 0) {
    // Si no se encontró ningún usuario, redirige a la página de login (comentado)
    // header("Location: login.html");
    // Muestra un mensaje de error (para depuración)
    echo "No ingreso";
    // Muestra un mensaje de error con redirección (comentado)
    // echo "<script> alert('Error');window.location= 'login.html' </script>";
}
	


?>