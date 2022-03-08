
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		
		include 'conexion.php';
		$sql="select * from vehiculo";
		$resultado=mysqli_query($con,$sql);
	?>
	<div  class="form-group">
		<div>
			<a class="btn btn-success" href="agregar.php">agregar</a>
			<table class="table">
				<thead>
					<tr>
						<th>id</th>
						<th>placa</th>
						<th>marca</th>
						<th>modelo</th>
						<th>acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($filas=mysqli_fetch_assoc($resultado)){

					?>
					<tr>
						<td><?php echo $filas ['id']  ?></td>
						<td><?php echo $filas ['placa']  ?></td>
						<td><?php echo $filas ['marca']  ?></td>
						<td><?php echo $filas ['modelo']  ?></td>
						<td>
							<a class="btn btn-primary" href="editar.php?id=<?php echo $filas ['id'] ?>">Editar</a>
							<a class="btn btn-danger" href="eliminar.php?id=<?php echo $filas ['id'] ?>">Eliminar</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
			
			include 'conexion.php';
			$sql="select * from conductor";
			$resultado=mysqli_query($con,$sql);
		?>
		<hr>
		<div>
			<a class="btn btn-success" href="agregarC.php">agregar</a>
			<table class="table">
				<thead>
					<tr>
						<th>id</th>
						<th>nombre</th>
						<th>identificacion</th>
						<th>vehiculo</th>
						<th>acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($filas=mysqli_fetch_assoc($resultado)){

					?>
					<tr>
						<td><?php echo $filas ['id']  ?></td>
						<td><?php echo $filas ['nombre']  ?></td>
						<td><?php echo $filas ['identificacion']  ?></td>
						<td><?php echo $filas ['id_vehiculo']  ?></td>
						<td>
							<a class="btn btn-primary" href="editarC.php?id=<?php echo $filas ['id'] ?>">Editar</a>
							<a class="btn btn-danger" href="eliminarC.php?id=<?php echo $filas ['id'] ?>">Eliminar</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>		
		</div>	
	</div>
</body>
</html>