<?php
class Vicerrectoria_Investigaciones_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	/**
	 * Este metodo consulta los proyectos que llegaron a la vicerrectoria de investigaciones.
	 * @return data, retorna los proyectos que estan en la tabla de vicerrectoria_investigaciones.
	 */
	function consultar(){


		$this->db->select('p.NUMERO, p.FACULTAD, p.PROGRAMA, p.FORMATO_PROYECTO, c.ESTADO');
		$this->db->from('PROYECTO p');
		$this->db->join('VICERRECTORIA_INVESTIGACION c', 'c.FK_PROYECTO = p.NUMERO');


		$query = $this->db->get();

		return $data[]=$query->result();
	}

	/**
	 * Metodo que sirve para evaluar un proyecto por el vicerrectoria de investigaciones 
	 * @param unknown $decision, si el proyecto es Aprobado o No Aprobado.
	 * @param unknown $id, Identificación del proyecto.
	 */
	function evaluar($decision, $id){

		$this->db->select('ESTADO');
		$this->db->where('FK_PROYECTO', $id);
		$this->db->where('ESTADO','Aprobado');
		$query= $this->db->get('VICERRECTORIA_INVESTIGACION');
		foreach ($query->result() as $row){
			$cumple= $row->ESTADO;
		}
		if($cumple!='Aprobado' && $cumple!="No Aprobado"){
			if($decision=='Aprobado'){
					
				$data= array('ESTADO'=>$decision);
				$this->db->where('FK_PROYECTO', $id);
				$this->db-> update('VICERRECTORIA_INVESTIGACION', $data);
				$this->generarArchivo($id,$decision);
			}else{
				if($decision== "No Aprobado"){
					$data= array('ESTADO'=> $decision);
					$this->db->where('FK_PROYECTO', $id);
					$this->db-> update('VICERRECTORIA_INVESTIGACION', $data);
					$this->generarArchivo($id,$decision);
				}
			}
		}
		
	}
	
	function generarArchivo($id, $decision){
		
		//se consulta el titulo del proyecto
		$this->db->where('NUMERO',$id);
		$nombre_Proy=$this->db->get('PROYECTO');
		foreach ($nombre_Proy->result() as $row){
			$nombre_Proyecto= $row->TITULO;
		}
		//se consulta el id y el nombre del investigador
		$this->db->where('FK_PROYECTO', $id);
		$idInvest=$this->db->get('PROYECTO_INVESTIGADOR');
		foreach ($idInvest->result() as $row){
			$id_Investigador= $row->FK_INVESTIGADOR;
		}
		$this->db->where('DOCUMENTO', $id_Investigador);
		$nombreInves=$this->db->get('INVESTIGADOR');
		foreach ($nombreInves->result() as $row){
			$nombre_Investigador= $row->NOMBRE;
		}
		
		$f1= fopen("respuesta_vicerrectoria.txt", "a") or die ("problemas al crear archivo");
		
		if($decision=="Aprobado"){
		
		fwrite($f1, "Vicerrectoria de Investigaciones");
		fwrite($f1,"\n"."\n");
		fwrite($f1,"Estimado ".$nombre_Investigador." con identificación: ".$id_Investigador."\n");
		fwrite($f1,"  le informamos que el proyecto ".$nombre_Proyecto." tuvo una calificación satisfactoria, por favor acercarse a esta dependencia para dar inicio al proyecto.");
		fwrite($f1, "\n"."\n"."\n". "PATRICIA LANDAZURI MSc PHD.");
		
		fclose($f1);
		}
		else{
			if($decision=="No Aprobado"){
				fwrite($f1, "Vicerrectoria de Investigaciones");
				fwrite($f1,"\n"."\n");
				fwrite($f1,"Estimado ".$nombre_Investigador." con identificación: ".$id."\n");
				fwrite($f1,"  le informamos que el proyecto ".$nombre_Proyecto." no tuvo una calificación satisfactoria, puede acogerse al art.37 del Estatuto de investigaciones.");
				fwrite($f1, "\n"."\n"."\n". "PATRICIA LANDAZURI MSc PHD.");
				fclose($f1);
			}
		}
		
		
		
	}

}