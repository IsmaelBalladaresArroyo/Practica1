<?php
/*
Este archivo lista todos los datos de la tabla, obteniendo a los mismos como un arreglo
*/
?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select id, nombre, edad from mascotas");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "encabezado.php" ?>
<div class="row">

	<div class="col-12">
		<h1 class="text-center">Listar con arreglo</h1>
		<a href="https://tecsup.instructure.com/courses/25788" target="_blank">Por Ismael Balladares</a>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
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
					<!--
					Modificación
					-->
					<?php foreach($mascotas as $mascota){ ?>
						<tr>
							<td class="alert alert-success" role="alert"><?php echo $mascota->id ?></td>
							<td class="alert alert-warning" role="alert"><?php echo $mascota->nombre ?></td>
							<td class="alert alert-success" role="alert"><?php echo $mascota->edad ?></td>
							<td class="alert alert-warning" role="alert"><a class="btn btn-warning alert-link" href="<?php echo "editar.php?id=" . $mascota->id?>">Editar 📝</a></td>
							<td class="alert alert-success" role="alert"><a class="btn btn-danger alert-link" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once "pie.php" ?>