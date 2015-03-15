<?php 

class Investigador{

/*
Atributos de la clase Investigador.
*/
	private $nombre;
	private $apellido;
	private $cedula;
	private $telefono;
	private $edad;
	private $correo;
	private $esExterno;
	private $fechaRegistro;
	private $userName;
	private $rol; 


	public function _construct($nombre, $apellido, $cedula, $telefono,
		$edad, $correo, $esExterno, $fechaRegistro, $userName, $rol){

		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->cedula=$cedula;
		$this->telefono=$telefono;
		$this->edad=$edad;
		$this->correo=$correo;
		$this->esExterno=$esExterno;
		$this->fechaRegistro=$fechaRegistro;
		$this->userName=$userName;
		$this->rol=$rol;


	}
}