<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="delete from vehiculo where Id='".$id."'";
mysqli_query($con,$sql);
header("location:index.php");
?>