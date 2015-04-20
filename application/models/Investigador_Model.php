<?php
class Investigador_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 *  Metodo para insertar un investigador a la base de datos.
	 * @param unknown $investigador, el investigador a editar
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function insertar($investigador){
		
		$this->db->insert('INVESTIGADOR', $investigador);
	
	}
	
	/**
	 *  Metodo para editar un investigador a la base de datos.
	 * @param unknown $investigador, el investigador a editar.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
		function editar($id,$investigador){
						
			$this->db->where('documento', $id);
			$this->db->update('INVESTIGADOR', $investigador);
			
						
	}
}