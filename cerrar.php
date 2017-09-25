<?php
function CerrarSesion(){
	session_start();
	session_destroy();
	unset($_SESSION);
	header("Location: index.php");
	exit();
}

CerrarSesion();

?>