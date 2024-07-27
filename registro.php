<!DOCTYPE html>
<html lang="ES">
<meta charset="utf-8">
<head>
<style>
body{
background-image:url('melo.jpg');
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;
}
footer{
text-align: center;
padding:20px;
background-color:black;
color:white;
}
button{
background-color:lightblue;}
</style>
<title>Registrarse</title>
<link rel="icon" type="image/x-icon" href="faviconmio.ico">
</head>
<body>

<center>
<h1>INICIAR</h1>
<form method="POST">
<input placeholder="Usuario" name="usu"><br><br>
<input type="password" placeholder="Contraseña" name="clave"><br><br>
<button><input type="submit" name="registrar" value="REGISTRAR"></button> <br><BR><BR>
<button><a href="inicio_seccion.html">ATRAS</a></button>
<hr width=20% align=center color=black>
</form>
<?php
include("registrar.php");
?>
</center>

<!--<footer style="background-color:#f1de98;">

 <p> Autor:Sergio Valle<br>
Con fines educativos <br>
  2024 
 <a href="mailto:vallesergio334@gmail.com">vallesergio334@gmail.com </a></p>
</footer> -->
</body>
</html>