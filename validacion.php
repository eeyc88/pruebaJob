<?php
	require('conexion.php');
	require('funciones.php');
	$usuarioLogin = $_POST['usuario'];
	$passLogin = $_POST['password'];
	if(empty($usuarioLogin)||empty($passLogin)){
		header("Location: index.php");
		exit();
	}
	$sql = "SELECT * FROM usuario WHERE nombre= '".$usuarioLogin."' LIMIT 1";
	$get_info = $con->query($sql);
	$user = $get_info->fetch(PDO::FETCH_ASSOC); // FETCH_ASSOC , retorna los valores de la tabla mediante el nombre de su campo
	$result = $user['usuario'];
	if ( ($user['nombre']==$usuarioLogin) && ($user['clave']==$passLogin) ) {
		session_start();
		$_SESSION['nombre'] = $usuarioLogin;
		header("Location: informacionn.php");
	}else{
		MostrarAlerta("Error: Usuario o Contraseña Invalidos");
		exit();
	}
?>