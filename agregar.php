<div>
	<form>
		<label>Placa</label><br>
		<input type="text" name="txtplaca"><br>
		<label>Marca</label><br>
		<input type="text" name="txtmarca"><br>
		<label>Modelo</label><br>
		<input type="text" name="txtmodelo"><hr>

		<input type="submit" name="" value="agregar">
		<a href="index.php">Volver</a>
	</form>
</div>
<?php 
	include 'conexion.php';
	$placa=$_GET['txtplaca'];
	$marca=$_GET['txtmarca'];
	$modelo=$_GET['txtmodelo'];
	if ($placa!=null&$marca!=null&$modelo!=null){
		$sql="insert into vehiculo(placa,marca,modelo) values('".$placa."','".$marca."','".$modelo."')";
		mysqli_query($con,$sql);
		if($placa=1){
			header("location:index.php");
		}
	}
?>