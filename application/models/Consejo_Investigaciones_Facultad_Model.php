<?php
class Consejo_Investigaciones_Facultad_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 * Este metodo consulta los proyectos que estan en el consejo de investigaciones de la facultad.
	 * @return data, retorna los proyectos que estan en la tabla de consejo_invest_facultad.
	 */
	function consultar($facultad){
		

		$this->db->select('p.NUMERO, p.FACULTAD, p.PROGRAMA, p.FORMATO_PROYECTO, c.ESTADO');
		$this->db->from('PROYECTO p');
		$this->db->where('FACULTAD', $facultad);
		$this->db->join('CONSEJO_INVEST_FACULTAD c', 'c.FK_PROYECTO = p.NUMERO');


		$query = $this->db->get();

		return $data[]=$query->result();
	}

	/**
	 * Metodo que sirve para evaluar un proyecto por el consejo de investigaciones de la facultad y luego ser asignado al comite centra de investigaciones
	 * @param unknown $decision, si el proyecto es Aprobado o No Aprobado.
	 * @param unknown $id, Identificación del proyecto.
	 */
	function evaluar($decision, $id){

		$this->db->select('ESTADO');
		$this->db->where('FK_PROYECTO', $id);
		$this->db->where('ESTADO','Aprobado');
		$query= $this->db->get('CONSEJO_INVEST_FACULTAD');
		foreach ($query->result() as $row){
			$cumple= $row->ESTADO;
		}
		if($cumple!='Aprobado'){
		
		if($decision=='Aprobado'){
				
			$data= array('ESTADO'=>$decision);
			$data2= array('FK_PROYECTO'=> $id);

			$this->db->where('FK_PROYECTO', $id);
			$this->db-> update('CONSEJO_INVEST_FACULTAD', $data);
			$this->db->insert('COMITE_CENTRAL_INVESTIGACIONES', $data2);
		}else{
			if($decision== "No Aprobado"){
				$data= array('ESTADO'=> $decision);
				$this->db->where('FK_PROYECTO', $id);
				$this->db-> update('CONSEJO_INVEST_FACULTAD', $data);
			}
		}
	}
	}
}