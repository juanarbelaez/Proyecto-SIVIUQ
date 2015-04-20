<?php

class Proyecto_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 *  Metodo para insertar un Proyecto de Investigación a la base de datos.
	 * @param unknown proyecto, el proyecto de investigación a insertar.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function insertar($proyecto){
		$this->db->insert('PROYECTO', $proyecto);
	}

	/**
	 *  Metodo para editar un Proyecto de Investigación en la base de datos.
	 * @param unknown $proyecto, el proyecto de investigación a editar.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function editar($id,$proyecto){

		$this->db->where('identificacion', $id);
		$this->db->update('PROYECTO', $proyecto);
			

	}
}