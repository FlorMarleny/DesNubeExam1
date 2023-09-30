<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Odenfis">
    <title>PostgreSQL-PHP | Por Flor Rodriguez</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="./bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #17a2b8;
        }

        .navbar .navbar-brand {
            color: white;
            font-weight: 700;
        }

        .navbar .nav-item .nav-link {
            color: white;
        }

        .navbar .nav-item .nav-link:hover {
            color: black;
        }
    </style>
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
    <a class="navbar-brand d-flex align-items-center" target="_blank" href="https://tecsup.instructure.com/courses/25788">
            <img src="logo.png" alt="Logo" width="50" height="50">
            <span class="ml-2">PostgreSQL-PHP | Por Flor Rodriguez</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-colo" href="./listar.php">Listar (arreglo)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listarCursor.php">Listar (cursor)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php">Agregar</a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" class="container">