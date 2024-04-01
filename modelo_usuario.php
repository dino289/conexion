
<?php
/* MODELO CONEXION BASE DE DATOS*/	

class Modelo_Usuario{
	private $conexion;

	function __construct(){
		require_once 'modelo_conexion.php';
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}
	/* MODELO CONEXION BASE DE DATOS*/		

	/* MODELO VERIFICAR USUARIOS-LLAMADA VERIFICAR USUARIOS*/
	    function VerificarUsuario($usuario,$contra){
            $sql = "call SP_VERIFICAR_USUARIO('$usuario')";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					if(password_verify($contra, $consulta_VU["usu_contrasena"]))
                    {
                        $arreglo[] = $consulta_VU;
                    }
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }

	

}

