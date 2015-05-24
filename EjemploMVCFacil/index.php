<?php
	require 'APP/Controlador/controlador.php';

	$controlador=new controlador();

	if(isset($_GET['action'])&&$_GET['action']=='regUsuario'){
		$controlador->mostrarRegistrarUsuario();
	}else if(isset($_GET['action'])&&$_GET['action']=='regDepartamento'){
		$controlador->mostrarRegistrarDepartamento();
	}else if(isset($_POST['dni'])&&isset($_POST['nombre'])&&isset($_POST['apellido'])&&isset($_POST['correo'])){
		$controlador->registrarUsuario($_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"]);
	}else if(isset($_POST['nombre'])&&isset($_POST['dni'])&&isset($_POST['cantidadT'])&&isset($_POST['direccion'])){
		$controlador->registrarDepartamento($_POST["nombre"],$_POST["dni"],$_POST["cantidadT"],$_POST["direccion"]);
	}
	else{
		$controlador->mostrarInicio();
	}
?>