<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Investigador_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
// 		$this->load->model('Investigador_Model');
	}

	function index(){
		//$this->load->view('header', array('titulo' => "Crear Investigador"));
		$this->load->view('Investigador_View');
		//$this->load->view('footer');
	}

	/**
	 * funcion para insertar un investigador con los datos que llegan desde Investigador_View.
	 */
	function insertar(){

		$this->load->helper('url');
		$investigador= array(
				'PROGRAMA'=> $this->input->post('programa'),
				'FACULTAD'=> $this->input->post('facultad'),
				'GRUPO_INVESTIGACION'=> $this->input->post('grupo_investigacion'),
				'TIPO_VINCULACION'=> $this->input->post('tipo_vinculacion'),
				'NOMBRE'=> $this->input->post('nombre'),
				'DOCUMENTO'=> $this->input->post('documento'),
				'CELULAR'=> $this->input->post('celular'),
				'CORREO'=> $this->input->post('correo')
		);


		$this->load->model('Investigador_Model');
		if($this->Investigador_Model->insertar($investigador))
			redirect('Investigador_Controller');

	}
	
	/**
	 * funcion para editar un investigador con los datos que llegan desde Investigador_View.
	 */
		function editar(){
		$this->load->helper('url');

		$id=$this->input->post('documento');
		$investigador= array(
				'PROGRAMA'=> $this->input->post('programa'),
				'FACULTAD'=> $this->input->post('facultad'),
				'GRUPO_INVESTIGACION'=> $this->input->post('grupo_investigacion'),
				'TIPO_VINCULACION'=> $this->input->post('tipo_vinculacion'),
				'NOMBRE'=> $this->input->post('nombre'),
				'CELULAR'=> $this->input->post('celular'),
				'CORREO'=> $this->input->post('correo')
		);
		
		$this->load->model('Investigador_Model');
		$this->Investigador_Model->editar($id,$investigador);
			redirect('Investigador_Controller');
		
		
	}
	
	/**
	 * Funcion para eliminar un investigador de la base de datos a traves del id.
	 */
	function eliminar(){
		$this->load->helper('url');
		$id=$this->input->post('documento');
		
		$this->load->model('Investigador_Model');
		$this->Investigador_Model->eliminar($id);
		redirect('Investigador_Controller');
	}
	
	
	function listarInvestigadoresGrupoInvestigacion(){
		$nombre= $this->input->post('grupo_investigacion');
		
		$this->load->model('Investigador_Model');
		$data['data']= $this->Investigador_Model->listarInvestigadoresGrupoInvestigacion($nombre);
		//$this->load->view('header', array('titulo' => "Tabla Investigadores Grupo Investigación"));
		$this->load->view('Tabla_View', $data);
		//$this->load->view('footer');
	}

	function obtener(){
		$this->load->helper('url');
		$this->load->model('Investigador_Model');
		$this->Investigador_Model->obtener($id);
	}
}