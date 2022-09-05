<?php
include("conexion.php");
$con=conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];

$sql="INSERT INTO usuarios (id, nombre, apellidos, direccion, celular, correo) VALUES ('$id', '$nombre', '$apellidos', '$direccion', '$celular', '$correo')";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: usuarios.php");
}

?>
