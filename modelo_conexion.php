<?php 

class conexion  
{
	private $servidor;
	private $usuario;
	private $contraseña;
	private $basededatos;
	public $conexion;
	
   public function __construct(){
		$this->servidor = "localhost";
		$this->usuario = "root";
		$this->contraseña = "";
		$this->basededatos = "colegio";
		 
	}
	function conectar(){
		$this->conexion = new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basededatos);
		$this->conexion->set_charset('utf8');
	}
	function cerrar(){
		$this->conexion->close();
	}
}




 ?>