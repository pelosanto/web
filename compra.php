<!DOCTYPE html>
<html lang="ES">
<meta charset="utf-8">
<head>
<title>Comprar</title>
<link rel="icon" type="image/x-icon" href="faviconmio.ico">
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
background-color:lightblue;
}
input{
background-color:beige;
}
</style>
</head>
<body>
<center>

<p><font size=45 >Estas a un paso<br></font><p>
<p><font size=30 >de<strong> dejar </strong>tu perdida de cabello en el pasado <br> </font></p>

<form  method="POST">
<table >
<tr>
<td>
<img src="imagen1.jpg" width="250" height="400">
</td>
<td>
<input placeholder="Nombre" name="nom"><br><br>
<input placeholder="Documento" name="doc"><br><br>
<input placeholder="Correo" name="correo"><br><br>
<input placeholder="Direccion " name="direccion"><br><br>
<input placeholder="Metodo de pago" name="metodo"><br><br>
<input placeholder="Cantidad" name="cantidad"><br><br><br>
<button><input type="submit" name="comprar" value="COMPRAR" ></button>
<hr width=200>

</td>
</tr>
</table>
</form>
<?php
include("reg_compra.php");
?>


</center>
<!--<footer style="background-color:#f1de98;">

 <p> Autor:Sergio Valle<br>
Con fines educativos <br>
  2024 <br>
 <a href="mailto:vallesergio334@gmail.com">vallesergio3<34@gmail.com </a></p>
</footer> -->
</body>
</html>