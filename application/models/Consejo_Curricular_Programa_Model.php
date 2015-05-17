<?php

class Consejo_Curricular_Programa_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 * Este metodo consulta los proyectos que estan en el consejo curricular del programa.
	 * @return data, retorna los proyectos que estan en la tabla de consejo_curric_programa
	 */
	function consultar($programa){
		

		$this->db->select('p.NUMERO, p.FACULTAD, p.PROGRAMA, p.FORMATO_PROYECTO, c.ESTADO');
		$this->db->from('PROYECTO p');
		$this->db->where('PROGRAMA', $programa);
		$this->db->join('CONSEJO_CURRIC_PROGRAMA c', 'c.FK_PROYECTO = p.NUMERO');
		
		
		$query = $this->db->get();
		
		return $data[]=$query->result();
	}
	
	/**
	 * Metodo que sirve para evaluar un proyecto por el consejo curricular del programa y luego ser asignado al consejo de
	 * investigacion de la facultad.
	 * @param unknown $decision, si el proyecto es Aprobado o No Aprobado.
	 * @param unknown $id, Identificación del proyecto.
	 */
	function evaluar($decision, $id){

		$this->db->select('ESTADO');
		$this->db->where('FK_PROYECTO', $id);
		$this->db->where('ESTADO','Aprobado');
		$query= $this->db->get('CONSEJO_CURRIC_PROGRAMA');
		foreach ($query->result() as $row){
			$cumple= $row->ESTADO;
		}
		if($cumple!='Aprobado'){
		if($decision=='Aprobado'){
			
			$data= array('ESTADO'=>$decision);
			$data2= array('FK_PROYECTO'=> $id, 'ESTADO'=> 'No Evaluado');
				
			$this->db->where('FK_PROYECTO', $id);
			$this->db-> update('CONSEJO_CURRIC_PROGRAMA', $data);
			$this->db->insert('CONSEJO_INVEST_FACULTAD', $data2);
		}else{
			if($decision== "No Aprobado"){
				$data= array('ESTADO'=> $decision);
				$this->db->where('FK_PROYECTO', $id);
				$this->db-> update('CONSEJO_CURRIC_PROGRAMA', $data);
			}
		}
	}
	}

}