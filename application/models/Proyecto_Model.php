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
	function insertar($proyecto, $idConvocatoria){
		$grupo= $proyecto['GRUPO_INVESTIGACION'];
		$IdProyecto= $proyecto['NUMERO'];
		$idInvestigador= $proyecto['INVESTIGADOR_PRINCIPAL'];
		
		$queryExiste= $this->db->get_where('PROYECTO', array('NUMERO'=>$IdProyecto));
		
		foreach ($queryExiste->result() as $row)
		{
			$id= $row->NUMERO;
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
				
				$query2=$this->db->get_where('INVESTIGADOR',array('DOCUMENTO'=>$idInvestigador));
				foreach ($query2->result() as $row)
				{
					$idInve=$row->DOCUMENTO;
				}
				
				if(isset($idInve)){
				//se agrega el proyecto a la tabla proyecto.
				$this->db->insert('PROYECTO', $proyecto);
				$data=array(
						'FK_GRUPO'=>$idGrupo,
						'FK_PROYECTO'=>$IdProyecto
				);
				//se agrega el fk_grupo y el fk_investigador a la tabla investigadores por grupo de investigacion.
				$this->db->insert('PROYECTO_GRUPO_INVEST',$data);
				
				$data2=array(
					'FK_INVESTIGADOR'=>$idInve,
					'FK_PROYECTO'=>$IdProyecto	
				);
				
				$this->db->insert('PROYECTO_INVESTIGADOR', $data2);
				
				$data3=array(
						
				'FK_CONVOCATORIA'=> $idConvocatoria,
				'FK_PROYECTO'=> $IdProyecto
						
				);
				$this->db->insert('CONVOCATORIA_PROYECTO', $data3);
				
				$data4= array(
					'FK_PROYECTO'=> $IdProyecto
							
				);
				$this->db->insert('CONSEJO_CURRIC_PROGRAMA', $data4);
				
				echo '<script language="javascript">alert("se envio al consejo curricular del programa para su debida evaluacion");</script>'; 
				$this->load->view('Proyecto_view');
				
			}
			else{
				echo '<script language="javascript">alert("El investigador no existe vuelva atras para corregir el error");</script>';
			}
			}
			else{
				echo '<script language="javascript">alert("El grupo de investigacion no existe vuelva, atras para corregir el error");</script>';
			}
		
		}
		else{
			echo '<script language="javascript">alert("El proyecto que intenta crear ya existe, vuelva atras para corregir el error");</script>';
		}
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
	
	
	function listarProyectosConvocatoria($idConvocatoria){
		$query= $this->db->get_where('convocatoria', array('NUMERO'=> $idConvocatoria));
			
		foreach ($query->result() as $row){
			$idConvocatoria=$row->NUMERO;
		}
			
			
		if(isset($idConvocatoria)){
				
			$query2= $this->db->get_where('CONVOCATORIA_PROYECTO', array('fk_CONVOCATORIA'=> $idConvocatoria));
			foreach ($query2->result() as $row){
				$idProyecto= $row->FK_PROYECTO;
					
					
				$listaProyectos=$this->db->get_where('PROYECTO', array('NUMERO'=>$idProyecto));
					
					
				$data[]=$listaProyectos->result();
		
			}
			return $data;
		}
		else{
			echo '<script language="javascript">alert("El proyecto no existe vuelva, atras para corregir el error");</script>';
		}
	}
	
	function listarProyectosInvestigador($idInvestigador){
		$query= $this->db->get_where('INVESTIGADOR', array('DOCUMENTO'=> $idInvestigador));
			
		foreach ($query->result() as $row){
			$idInvestigador=$row->DOCUMENTO;
		}
			
		if(isset($idInvestigador)){
	
			$query2= $this->db->get_where('PROYECTO_INVESTIGADOR', array('fk_INVESTIGADOR'=> $idInvestigador));
			foreach ($query2->result() as $row){
				$idProyecto= $row->FK_PROYECTO;
					
					
				$listaProyectos=$this->db->get_where('PROYECTO', array('NUMERO'=>$idProyecto));
					
					
				$data[]=$listaProyectos->result();
	
			}
			return $data;
		}
		else{
			echo '<script language="javascript">alert("El proyecto no existe vuelva, atras para corregir el error");</script>';
		}
	}
	
	function listarProyectosGrupoInvestigacion($nombreGrupo){
		$query= $this->db->get_where('GRUPO_INVESTIGACION', array('NOMBRE'=> $nombreGrupo));
			
		foreach ($query->result() as $row){
			$idGrupo=$row->IDENTIFICACION;
		}
			
		if(isset($idGrupo)){
	
			$query2= $this->db->get_where('PROYECTO_GRUPO_INVEST', array('fk_GRUPO'=> $idGrupo));
			foreach ($query2->result() as $row){
				$idProyecto= $row->FK_PROYECTO;
					
					
				$listaProyectos=$this->db->get_where('PROYECTO', array('NUMERO'=>$idProyecto));
					
					
				$data[]=$listaProyectos->result();
	
			}
			return $data;
		}
		else{
			echo '<script language="javascript">alert("El proyecto no existe vuelva, atras para corregir el error");</script>';
		}
	}
	
}