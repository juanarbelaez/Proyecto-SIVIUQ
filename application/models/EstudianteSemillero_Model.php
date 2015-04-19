<?php

class EstudianteSemillero_Model extends CI_Model{
	
	
	function __construct(){
		parent::__construct();
	}
	
	/**
	 *  Metodo para insertar un Estudiante de Semillero a la base de datos.
	 * @param unknown estudiante, el estudiante a insertar.
	 * @return boolean, true si inserto y false si no.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function insertar($estudiante){
		if($this->db->insert('ESTUDIANTE_SEMILLERO', $estudiante)){
				
			return true;
				
		}
		else{
			return false;
		
			}
	}
}