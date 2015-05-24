<?php
	class modelo{
		private $conexion;

		public function conectar($host, $usuario, $contraseña, $base)
		{
			$this->conexion=mysql_connect($host, $usuario, $contraseña, $base);
		}

		public function desconectar()
		{
			mysql_close();
		}

		public function consulta($sql)
		{

			return mysql_query($sql, $this->conexion);
		}
	}


?>