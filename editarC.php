<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="select * from conductor where Id='".$id."'";
$resultado=mysqli_query($con,$sql);
	while ($fila=mysqli_fetch_assoc($resultado)){

?>
<div>
	<form>
		<input type="hidden" name="txtid" value="<?php echo $fila['id'] ?>">
		<label>Nombre</label><br>
		<input type="text" name="txtnombre" value="<?php echo $fila['nombre'] ?>"><br>
		<label>Identificacion</label><br>
		<input type="text" name="txtidentificacion" value="<?php echo $fila['identificacion'] ?>"><br>
		<label>Placa Vehiculo</label><br>
		<select type="text" name="txtvehiculo" value="<?php echo $fila['id_vehiculo'] ?>">
				<?php 
				include 'conexion.php';
				$sql="select * from vehiculo";
				$resultado=mysqli_query($con,$sql);
				while ($fila=mysqli_fetch_assoc($resultado)){

				?>
					<option value="<?php echo $fila['id'] ?>"><?php echo $fila ['placa'] ?></option>
				<?php }?>

			
		</select><hr>

		<input class="btn btn-primary" type="submit" name="" value="actualizar">
		<a href="index.php">Volver</a>
	</form>
	<?php } ?>
</div>
<?php
	$idp=$_GET['txtid'];
	$nombre=$_GET['txtnombre'];
	$identificacion=$_GET['txtidentificacion'];
	$id_vehiculo=$_GET['txtvehiculo'];
	if ($nombre!=null&$identificacion!=null&$id_vehiculo!=null){
		$sql2="update conductor set nombre='".$nombre."',identificacion='".$identificacion."',id_vehiculo='".$id_vehiculo."' where Id='".$idp."'";
		
		mysqli_query($con,$sql2);
		if($nombre=1){
			//echo $sql2;
			header("location:index.php");
		}
	}
?>