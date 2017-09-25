<?php

function obtenerScriptActual($directorio,$indice){
	$archivo = explode("/", $directorio);
	return $archivo[$indice];
}

function MostrarAlerta($valor){
	echo "<script type='text/javascript'>alert('".$valor."')</script>";
}

function CerrarSesion(){
	session_destroy();
	unset($_SESSION);
	header("Location: index.php");
	exit();
}

function EnviarCorreo($to,$subject,$mensaje,$headers){
	if (mail($to, $subject, $message, $headers)){
		MostrarAlerta("Envio de mensaje exitoso");
	}else{
		MostrarAlerta("No se pudo enviar mensaje");
	}
}


?>