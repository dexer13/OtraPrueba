<?php
	require "App/Modelo/modelo.php";
	class usuario extends modelo{

		public function registrar($DNI, $nombre, $apellido, $correo){
			$conection=$this->conectar("localhost","root","","ejemplo");			
			$error=$this->consulta("INSERT INTO ejemplo.usuario VALUES ('".$DNI."','".$nombre."','".$apellido."','".$correo."')");
			$this->desconectar();

			return $error;
		}
	}
?>