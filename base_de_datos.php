<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
$username = "root";  // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$databaseName = "mascotas"; // Nombre de tu base de datos

// try {
//     $base_de_datos = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
//     $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     die("Error en la conexión a la base de datos: " . $e->getMessage());
// }

$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
