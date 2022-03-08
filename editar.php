<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="select * from vehiculo where Id='".$id."'";
$resultado=mysqli_query($con,$sql);
	while ($fila=mysqli_fetch_assoc($resultado)){

?>
<div>
	<form>
		<input type="hidden" name="txtid" value="<?php echo $fila['id'] ?>">
		<label>Placa</label><br>
		<input type="text" name="txtplaca" value="<?php echo $fila['placa'] ?>"><br>
		<label>Marca</label><br>
		<input type="text" name="txtmarca" value="<?php echo $fila['marca'] ?>"><br>
		<label>Modelo</label><br>
		<input type="text" name="txtmodelo" value="<?php echo $fila['modelo'] ?>"><hr>

		<input class="btn btn-primary" type="submit" name="" value="actualizar">
		<a href="index.php">Volver</a>
	</form>
	<?php } ?>
</div>
<?php
	$idp=$_GET['txtid'];
	$placa=$_GET['txtplaca'];
	$marca=$_GET['txtmarca'];
	$modelo=$_GET['txtmodelo'];
	if ($placa!=null&$marca!=null&$modelo!=null){
		$sql2="update vehiculo set placa='".$placa."',marca='".$marca."',modelo='".$modelo."' where Id='".$idp."'";
		
		mysqli_query($con,$sql2);
		if($placa=1){

			header("location:index.php");
		}
	}
?>