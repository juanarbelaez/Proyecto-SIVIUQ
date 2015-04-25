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
		
		$grupo= $investigador['GRUPO_INVESTIGACION'];
		$idInvestigador= $investigador['DOCUMENTO'];
		
		$queryExiste= $this->db->get_where('INVESTIGADOR', array('DOCUMENTO'=>$idInvestigador));
		
		foreach ($queryExiste->result() as $row)
		{
			$id= $row->DOCUMENTO;
		}
		
		if(!isset($id)){
		
			//se consulta la identificacion del grupo de investigacion por su nombre.
		$query=$this->db->select('IDENTIFICACION');
		$query = $this->db->get_where('grupo_investigacion', array('NOMBRE'=>$grupo));
	
 	foreach ($query->result() as $row)
{
    $idGrupo= $row->IDENTIFICACION;
}

		 if(isset($idGrupo)){
		 	//se agrega el investigador a la tabla investigador.
		 	$this->db->insert('INVESTIGADOR', $investigador);
		 	$data=array(
		 			'FK_GRUPO'=>$idGrupo,
		 			'FK_INVESTIGADOR'=>$idInvestigador
		 	);
		 	//se agrega el fk_grupo y el fk_investigador a la tabla investigadores por grupo de investigacion.
		 	$this->db->insert('INVESTIGADORES_GRUPO_INVEST',$data);
		 }
		 else{
		 	echo "no existe el grupo de investigación";
		 }
		
		}
		else{
			echo "el investigador ya existe.";
		}
	
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
		
		/**
		 * Metodo para eliminar un investigador de la base de datos, mediante su documento.
		 * @param unknown $id, documento del investigador.
		 */
		function eliminar($id){
			$this->db->where('documento',$id);
			$this->db->delete('INVESTIGADOR');
		}
		
		
		/**
		 * Metodo que sirve para listar investigadores por grupo de investigacion.
		 * @param unknown $nombre
		 */
		function listarInvestigadoresGrupoInvestigacion($nombre)
		{
			
			$query= $this->db->get_where('grupo_investigacion', array('NOMBRE'=> $nombre));
			
			foreach ($query->result() as $row){
				$idGrupo=$row->IDENTIFICACION;
			}
			
			
			if(isset($idGrupo)){
			
			$query2= $this->db->get_where('INVESTIGADORES_GRUPO_INVEST', array('fk_grupo'=> $idGrupo));
			foreach ($query2->result() as $row){
				$idInvestigador= $row->FK_INVESTIGADOR;
			
			
			$listaInvestigadores=$this->db->get_where('INVESTIGADOR', array('documento'=>$idInvestigador));
			
			
			$data[]=$listaInvestigadores->result();
// 			foreach ($listaInvestigadores->result() as $row){
// 				echo $row->NOMBRE;
// 				echo $row->DOCUMENTO;
// 				echo $row->FACULTAD;
// 				echo $row->PROGRAMA;
// 				echo $row->GRUPO_INVESTIGACION;
// 				echo $row->TIPO_VINCULACION;
// 				echo"<br>";
// 			}

			}
			return $data;
		}
			else{
				echo "el grupo de investigación no existe";
			}
		}
}