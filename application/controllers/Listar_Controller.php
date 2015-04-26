<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Listar_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('header', array('titulo' => "Listar Proyectos"));
		$this->load->view('Listar_View');
		$this->load->view('footer');
	}
	
	function listar(){
		echo $buscar= $this->input->post('buscar');
		echo $tipo= $this->input->post('tipo');
		$this->load->model('Proyecto_Model');
		
		if($tipo=='convocatoria'){
			$data['listaProyectos']= $this->Proyecto_Model->listarProyectosConvocatoria($buscar);
			$this->load->view('header', array('titulo' => "Proyectos por Convocatoria"));
			$this->load->view('Listar_Proyectos_View', $data);
			$this->load->view('footer');
		}
		else{
			if($tipo=='grupo_investigacion'){

				$data['listaProyectos']= $this->Proyecto_Model->listarProyectosGrupoInvestigacion($buscar);
				$this->load->view('header', array('titulo' => "Proyectos por Grupo Investigación"));
				$this->load->view('Listar_Proyectos_View', $data);
				$this->load->view('footer');
			}
			else {
				if($tipo=='investigador'){
					$data['listaProyectos']= $this->Proyecto_Model->listarProyectosInvestigador($buscar);
					$this->load->view('header', array('titulo' => "Proyectos por Investigador"));
					$this->load->view('Listar_Proyectos_View', $data);
					$this->load->view('footer');
					
				}
			}
		}
	}
	
// 	function listarProyectosConvocatoria(){
	
		
// 	}
	
// 	function listarProyectosInvestigador(){
	
// 		$idInvestigador=$this->input->post('investigador_principal');
// 		$this->load->model('Proyecto_Model');
		
// 	}
	
	
// 	function listarProyectosGrupoInvestigacion(){
	
// 		$nombreGrupo=$this->input->post('grupo_investigacion');
// 		$this->load->model('Proyecto_Model');
		
// 	}
}