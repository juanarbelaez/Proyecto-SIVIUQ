<?php
class Investigador_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 *  Metodo para insertar un investigador a la base de datos.
	 * @param unknown $investigador, el investigador a insertar.
	 * @return boolean, true si inserto y false si no.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function insertar($investigador){
		if($this->db->insert('INVESTIGADOR', $investigador)){

			return true;

		}
		else{
			return false;

		}
	}
}