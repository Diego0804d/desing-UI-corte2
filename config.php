<?php
$host = "localhost"; // Servidor de la base de datos
$user = "root"; // Usuario por defecto en XAMPP
$password = ""; // Deja vacío si usas XAMPP
$dbname = "tienda"; // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
