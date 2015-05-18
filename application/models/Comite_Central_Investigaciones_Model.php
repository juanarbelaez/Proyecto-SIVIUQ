<?php

class Comite_Central_Investigaciones_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 * Este metodo consulta los proyectos que estan en el comite central de investigaciones.
	 * @return data, retorna los proyectos que estan en la tabla de comite_central_investigaciones.
	 */
	function consultar(){


		$this->db->select('p.NUMERO, p.FACULTAD, p.PROGRAMA, p.FORMATO_PROYECTO, c.ESTADO');
		$this->db->from('PROYECTO p');
		$this->db->join('COMITE_CENTRAL_INVESTIGACIONES c', 'c.FK_PROYECTO = p.NUMERO');


		$query = $this->db->get();

		return $data[]=$query->result();
	}

	/**
	 * Metodo que sirve para evaluar un proyecto por el comite central de investigaciones y luego ser asignado a la vicerrectoria de investigaciones.
	 * @param unknown $decision, si el proyecto es Aprobado o No Aprobado.
	 * @param unknown $id, Identificación del proyecto.
	 */
	function evaluar($decision, $id){

		$this->db->select('ESTADO');
		$this->db->where('FK_PROYECTO', $id);
		$this->db->where('ESTADO','Aprobado');
		$query= $this->db->get('COMITE_CENTRAL_INVESTIGACIONES');
		foreach ($query->result() as $row){
			$cumple= $row->ESTADO;
		}
		if($cumple!='Aprobado'){
			if($decision=='Aprobado'){
					
				$data= array('ESTADO'=>$decision);
				$data2= array('FK_PROYECTO'=> $id, 'ESTADO'=> 'No Evaluado');

				$this->db->where('FK_PROYECTO', $id);
				$this->db-> update('COMITE_CENTRAL_INVESTIGACIONES', $data);
				$this->db->insert('VICERRECTORIA_INVESTIGACION', $data2);
			}else{
				if($decision== "No Aprobado"){
					$data= array('ESTADO'=> $decision);
					$this->db->where('FK_PROYECTO', $id);
					$this->db-> update('COMITE_CENTRAL_INVESTIGACIONES', $data);
				}
			}
		}
	}

}