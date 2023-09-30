<?php
$servername = "localhost"; 
$username = "root";  
$password = ""; 
$databaseName = "mascotas"; 


//Funciona para listaCursor

// try {
//     $base_de_datos = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
//     $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     die("Error en la conexión a la base de datos: " . $e->getMessage());
// }

//Funciona para Listar
$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
