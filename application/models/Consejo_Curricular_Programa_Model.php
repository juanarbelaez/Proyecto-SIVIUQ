<?php

class Consejo_Curricular_Programa_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 * Este metodo consulta los proyectos que estan en el consejo curricular del programa.
	 * @return data, retorna los proyectos que estan en la tabla de consejo_curric_programa
	 */
	function consulta(){
				
		$query= $this->db->get('CONSEJO_CURRIC_PROGRAMA');
		foreach ($query->result() as $row){
			$id= $row->FK_PROYECTO;
			
			$this->db->select('NUMERO, FACULTAD, PROGRAMA, FORMATO_PROYECTO');
		$consultaProyecto=$this->db->get_where('PROYECTO', array('NUMERO' => $id));
			
			$data[]= $consultaProyecto->result();
		}
		
		return $data;
	}
	function evaluar($decision, $id){
		
		if($decision=='Aprobado'){
			
			$data= array('FK_PROYECTO' => $id,
					'ESTADO'=> "Aprobado");
			$this->db->where('FK_PROYECTO', $id);
			$this->db-> update('CONSEJO_CURRIC_PROGRAMA', $data);
			$this->db->insert('CONSEJO_INVEST_FACULTAD', $data);
		}else{
			if($decision== "No Aprobado"){
				$data= array('FK_PROYECTO' => $id,
						'ESTADO'=> "No Aprobado");
				$this->db->where('FK_PROYECTO', $id);
				$this->db-> update('CONSEJO_CURRIC_PROGRAMA', $data);
			}
		}
	}

}