<?php
include("con_db.php");
if(isset($_POST['registrar'])){
	if(strlen($_POST['usu'])>=1 && strlen($_POST['clave'])>=1 ){
       
	   $usuario= trim ($_POST['usu']);
	   $clave= trim ($_POST['clave']);
	   $fechareg=date("d/m/y");
	   $consulta="INSERT INTO `datos`( nombre, email, fecha_reg) VALUES ('$usuario','$clave','$fechareg')";
	   $resultado=mysqli_query($conex,$consulta);
	   if($resultado){
		   ?>
		   <h3>¡Te has registrado correctamente!</h3>
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