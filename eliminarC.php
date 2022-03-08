<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="delete from conductor where Id='".$id."'";
mysqli_query($con,$sql);
header("location:index.php");
?>