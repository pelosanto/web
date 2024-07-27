<?php
include("con_db.php");
if(isset($_POST['comprar'])){
	if(strlen($_POST['nom'])>=1 && strlen($_POST['doc']) >=1 && strlen($_POST['correo'])>=1 && strlen($_POST['direccion'])>=1 && strlen($_POST['metodo']) >=1 && strlen($_POST['cantidad'])>=1 ){
       
	  $nombre= trim ($_POST['nom']);
	  $documento= trim ($_POST['doc']);
	  $correo= trim ($_POST['correo']);
	  $direccion= trim ($_POST['direccion']);
	  $metodo= trim ($_POST['metodo']);
	  $cantidad= trim ($_POST['cantidad']);
	   $fechareg=date("d/m/y");
	   $consulta="INSERT INTO `pagos`( nombre,documento,correo,direccion,meto_pago,cantidad,fecha ) VALUES ('$nombre','$documento','$correo','$direccion','$metodo','$cantidad','$fechareg')";
	   $resultado=mysqli_query($conex,$consulta);
	   if($resultado){
		   ?>
		   <h3>¡COMPRA EXITOSA!</h3>
		   <?php
	   } else {
		    ?>
		   <h3>¡Ups ha ocurrido un error!</h3>
		   <?php
	   }
	 } else{
		    ?>
		   <h3>¡Por favor complete los campos!</h3>
		   <?php
	 }
}


?>