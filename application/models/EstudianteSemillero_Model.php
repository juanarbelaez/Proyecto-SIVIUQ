<?php

class EstudianteSemillero_Model extends CI_Model{
	
	
	function __construct(){
		parent::__construct();
	}
	
	/**
	 *  Metodo para insertar un Estudiante de Semillero a la base de datos.
	 * @param unknown estudiante, el estudiante a insertar.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function insertar($estudiante){
		$this->db->insert('ESTUDIANTE_SEMILLERO', $estudiante);
	}
	
	/**
	 *  Metodo para editar un Estudiante de semillero en la base de datos.
	 * @param unknown $estudiante, el estudiante a editar.
	 * @author, Juan Sebastian Florez Saavedra
	 * @author, Jeison Julian Barbosa
	 * @author, Fabian David Osorio Sarmiento
	 */
	function editar($id,$estudiante){
		$this->db->where('identificacion', $id);
		$this->db->update('ESTUDIANTE_SEMILLERO', $estudiante);
	}

	function obtener($id){
		$consulta = $this->db->get_where('ESTUDIANTE_SEMILLERO', array('identificacion' => $id));
		$resultado = $consulta->result();
		return $resultado;
	}

	function eliminar($id){
		$consulta = $this->db->delete('ESTUDIANTE_SEMILLERO', array('identificacion' => $id));
	//	$resultado = $consulta->result();
	}

}