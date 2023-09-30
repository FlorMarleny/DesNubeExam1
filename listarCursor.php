<?php
include_once('base_de_datos.php');

if (!$base_de_datos) {
    die("Error en la conexión a la base de datos.");
}

$consulta = "SELECT id, nombre, edad FROM mascotas";
$sentencia = $base_de_datos->prepare($consulta, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
$sentencia->execute();
?>

<?php include_once "encabezado.php" ?>
<div class="row">
    <div class="col-12">
	<h1 class="mt-5">Listar con cursor</h1>
	<a href="https://tecsup.instructure.com/courses/25788" target="_blank" class="text-muted">Por Flor Rodriguez</a>
        <br>
		<table class="table table-bordered table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mascota = $sentencia->fetchObject()) : ?>
                    <tr>
                        <td><?php echo $mascota->id ?></td>
                        <td><?php echo $mascota->nombre ?></td>
                        <td><?php echo $mascota->edad ?></td>
                        <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id ?>">Editar 📝</a></td>
                        <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id ?>">Eliminar 🗑️</a></td>
                    </tr>
                <?php endwhile; ?>

                <?php if ($sentencia->rowCount() === 0) : ?>
                    <tr>
                        <td colspan="5">No se encontraron registros en la tabla "mascotas".</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>
