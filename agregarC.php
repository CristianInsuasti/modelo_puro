
<div>
	<form>
		<label>Nombre</label><br>
		<input type="text" name="txtnombre"><br>
		<label>Identificacion</label><br>
		<input type="text" name="txtidentificacion"><br>
		<label>Placa Vehiculo</label><br>
		<select type="text" name="txtvehiculo">
				<?php 
				include 'conexion.php';
				$sql="select * from vehiculo";
				$resultado=mysqli_query($con,$sql);
				while ($fila=mysqli_fetch_assoc($resultado)){

				?>
					<option value="<?php echo $fila['id'] ?>"><?php echo $fila ['placa'] ?></option>
				<?php }?>

			
		</select><hr>

		<input type="submit" name="" value="agregar">
		<a href="index.php">Volver</a>
	</form>
</div>
<?php 
	include 'conexion.php';
	$nombre=$_GET['txtnombre'];
	$identificacion=$_GET['txtidentificacion'];
	$id_vehiculo=$_GET['txtvehiculo'];
	if ($nombre!=null&$identificacion!=null&$id_vehiculo!=null){
		$sql="insert into conductor(nombre,identificacion,id_vehiculo) values('".$nombre."','".$identificacion."','".$id_vehiculo."')";
		mysqli_query($con,$sql);
		if($nombre=1){
			echo $sql1;
			header("location:index.php");
		}
	}
?>