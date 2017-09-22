<?php 

	$nom = $_POST["nombre"];
	$ape = $_POST["apellido"];
	$ed = $_POST["edad"];
	$Mensaje="Nombre: ".$nom." Apellido: ".$ape;

	switch (true) {
		case ($ed>18):
			$Mensaje=$Mensaje."\n\nPuedo pasar.";
			break;
		case ($ed<18):
			$Mensaje=$Mensaje."\n\nNo puedo pasar.";
			break;
		default:
			$Mensaje=$Mensaje."\n\nMmmm... no sé ;)";
			break;
	}

	echo $Mensaje;
 ?>