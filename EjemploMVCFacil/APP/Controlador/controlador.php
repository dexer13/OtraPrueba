<?php

require "app/modelo/usuario.php";
require "app/modelo/departamento.php";
	class Controlador{
		public function mostrarRegistrarUsuario()
		{
			$pag=$this->obtenerPlantilla("app/vista/index.html");
			$footer=$this->obtenerPlantilla("app/vista/footer.html");
			$header=$this->obtenerPlantilla("app/vista/header.html");
			$menu=$this->obtenerPlantilla("app/vista/seccion/seccionMenu.html");
			$seccion=$this->obtenerPlantilla("app/vista/seccion/moduloUsuario/moduloRegistro/seccion.html");
			$pag=$this->reemplazar("HEADER", $header, $pag);
			$pag=$this->reemplazar("FOOTER", $footer, $pag);
			$pag=$this->reemplazar("MENU", $menu, $pag);
			$pag=$this->reemplazar("SECCION", $seccion, $pag);
			$this->mostrar($pag);
		}

		public function mostrarRegistrarDepartamento()
		{
			$pag=$this->obtenerPlantilla("app/vista/index.html");
			$footer=$this->obtenerPlantilla("app/vista/footer.html");
			$header=$this->obtenerPlantilla("app/vista/header.html");
			$menu=$this->obtenerPlantilla("app/vista/seccion/seccionMenu.html");
			$seccion=$this->obtenerPlantilla("app/vista/seccion/moduloDepartamento/moduloRegistro/seccion.html");
			$pag=$this->reemplazar("HEADER", $header, $pag);
			$pag=$this->reemplazar("FOOTER", $footer, $pag);
			$pag=$this->reemplazar("MENU", $menu, $pag);
			$pag=$this->reemplazar("SECCION", $seccion, $pag);
			$this->mostrar($pag);
		}

		public function mostrarInicio()
		{
			$pag=$this->obtenerPlantilla("app/vista/index.html");
			$footer=$this->obtenerPlantilla("app/vista/footer.html");
			$header=$this->obtenerPlantilla("app/vista/header.html");
			$menu=$this->obtenerPlantilla("app/vista/seccion/seccionMenu.html");
			$pag=$this->reemplazar("HEADER", $header, $pag);
			$pag=$this->reemplazar("FOOTER", $footer, $pag);
			$pag=$this->reemplazar("MENU", $menu, $pag);
			$this->mostrar($pag);
		}
		public function obtenerPlantilla($plantilla)
		{
			return file_get_contents($plantilla);
		}

		//Remplaza la plantilla en el "index"
		public function reemplazar($antiguo, $nuevo, $donde)
		{
			return str_replace($antiguo, $nuevo, $donde);
		}

		//Mostrar el html :3
		public function mostrar($html)
		{
			echo $html;
		}
		public function registrarUsuario($DNI, $nombre, $apellido, $correo)
		{
			$usuario=new usuario();
			$var=$usuario->registrar($DNI, $nombre, $apellido, $correo);
			if($var==1){
				echo "<script type=text/javascript> alert('"."registro exito"."');</script>";
			}else{
				echo "<script type=text/javascript> alert('"."El DNI ya existe!!!"."');</script>";
			}
			$this->mostrarInicio();
		}

		public function registrarDepartamento($nombre, $DNI, $cantidad, $direccion)
		{
			$departamento=new departamento();
			$var=$departamento->registrar($nombre, $DNI, $cantidad, $direccion);
			if($var==1){
				echo "<script type=text/javascript> alert('"."registro exito"."');</script>";
			}else{
				echo "<script type=text/javascript> alert('"."El nombre ya existe"."');</script>";
			}
			$this->mostrarInicio();
		}
	}
?>