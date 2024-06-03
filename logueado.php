<?php 
include("conexion.php");
session_start();


$_SESSION['nombre']="X";

$id_usuario=$_POST['id_usuario'];
$psw=$_POST['psw'];

$sql = "SELECT id_usuario,nombre,apellido FROM usuario where id_rol ='1' and psw='$psw'";

$result = $conn->query($sql);


$existe=mysqli_num_rows($result);
if($existe==1)
{
	//echo "El usuario existe";
	setcookie("USU", $usuario);
	header("location:admin.php");
}
else
{
	header("location:usuario.php");
}


 ?>