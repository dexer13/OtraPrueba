<?php
	class departamento extends modelo{

		public function registrar($nombre,$dni,$cantidadT, $direccion){
				$this->conectar("localhost","root","","ejemplo");
				$error=$this->consulta("INSERT INTO ejemplo.departamento VALUES ('".$nombre."','".$dni."',".$cantidadT.",'".$direccion."')");
				$this->desconectar();
				return $error;
		
		}
	}
?>