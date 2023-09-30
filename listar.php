<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Odenfis">
    <title>Lista de Mascotas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 10px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 70px;
            margin-bottom: 10%;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: darkseagreen;

        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .editar {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 2px 2px;
            cursor: pointer;
        }

        .eliminar {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 2px 2px;
            cursor: pointer;
        }
    </style>
</head>

<?php include_once "encabezado.php" ?>

<body>
    <h1 class="mt-5">Lista de Mascotas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        // Incluir el archivo de conexión a la base de datos
        include_once('base_de_datos.php');

        // Consulta SQL para seleccionar todos los registros de la tabla "mascotas"
        $sql = "SELECT * FROM mascotas";

        // Ejecutar la consulta SQL
        $result = $conn->query($sql);

        // Verificar si la consulta se ejecutó correctamente
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                // Acceder a los datos de cada fila y mostrarlos en una tabla HTML
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["edad"] . "</td>
                        <td><a class='editar' href='editar.php?id=" . $row["id"] . "'>Editar</a></td>
                        <td><a class='eliminar' href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Error al ejecutar la consulta: " . $conn->error . "</td></tr>";
        }
        ?>
    </table>
</body>

<?php include_once "pie.php" ?>

</html>