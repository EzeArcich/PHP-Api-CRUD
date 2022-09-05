<?php
include("conexion.php");
$con=conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];

$sql="UPDATE usuarios SET id='$id', nombre='$nombre', apellidos='$apellidos', direccion='$direccion', celular='$celular', correo='$correo'";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: usuarios.php");
}

?>