<?php

$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
session_start();

$_SESSION['nombre']=$usuario;

$conn=mysqli_connect("localhost","root","","registro");
$consulta="SELECT * FROM datos WHERE nombre='$usuario' and email='$contra'";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas)
{
 header("location:compra.php");
}
else
{
?>

<?php
include("inicio_seccion.html");
?>
<h2> ERROR EN LA AUTENTICACCION </H2>

<?php
}

mysqli_free_result($resultado);
mysqli_close($conn);
?>