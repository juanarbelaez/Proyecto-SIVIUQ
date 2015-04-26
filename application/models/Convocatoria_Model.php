<?php

class Convocatoria_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	
	
	function listarConvocatorias(){
		
		$consulta=$this->db->get('CONVOCATORIA');
	
// 		foreach ($consulta->result() as $row){
// 			$cajon[]= $row->DESCRIPCION;
// // 			$cajon[]=$row->NUMERO;
// 		}
		return $consulta->result();
	}
}