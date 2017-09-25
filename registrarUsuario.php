<?php

require('conexion.php');
require('funciones.php');

MostrarAlerta($_POST['opcion']);
$opcion = $_POST['opcion'];

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$tipo = '';
if ($opcion == 'usuario_normal') {
	$tipo = 1;
}

if ($opcion == 'empresa') {
	$tipo = 2;
}

if ($opcion == 'proveedor') {
	$tipo = 3;
}

$insertar = "INSERT INTO usuario(nombre,clave,correo,telefono,tipo) VALUES ('".$usuario."','".$password."','".$correo."','".$telefono."',".$tipo.")";
$con->query($insertar);

$consulta = "SELECT * FROM usuario WHERE nombre='".$usuario."' LIMIT 1";
$get_info = $con->query($consulta);
$info = $get_info->fetch(PDO::FETCH_ASSOC);

$id_usuario = $info['id'];


if ($opcion == 'usuario_normal') {
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$identificacion = $_POST['cedula'];
	$insertarUsuario = "INSERT INTO info_usuarios(nombres,apellidos,cedula,id_usuario) VALUES ('".$nombres."','".$apellidos."','".$identificacion."',".$id_usuario.")";
	$con->query($insertarUsuario);
}

if ($opcion == 'empresa'){
	$empresa = $_POST['nombre_empresa'];
	$ruc = $_POST['ruc'];
}

if ($opcion == 'proveedor') {
	$proveedor = $_POST['nombre_prov'];
	$direccion = $_POST['direccion_prov'];
	$tipo = $_POST['tipo_prov'];
	$ruc = $_POST['ruc_prov'];
}





$headers = "From: eeyepez@espol.edu.ec";
$subject = "Datos de la cuenta";
$mensaje = "Su informacion de cuenta es la siguiente: usuario:".$usuario." y su contraseña es: ".$password." ";

//EnviarCorreo($to,$subject,$mensaje,$headers);

?>