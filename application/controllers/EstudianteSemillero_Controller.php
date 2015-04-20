<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EstudianteSemillero_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('EstudianteSemillero_view');
	}
	
	/**
	 * funcion para insertar un estudiante de semillero con los datos que llegan desde EstudianteSemillero_View.
	 */
	function insertar(){
	
		$this->load->helper('url');
		$estudiante= array(
				'SEMESTRE_SEMILLERO'=> $this->input->post('semestre_semillero'),
				'FACULTAD'=> $this->input->post('facultad'),
				'PROGRAMA'=> $this->input->post('programa'),
				'NOMBRE'=> $this->input->post('nombre'),
				'IDENTIFICACION'=> $this->input->post('identificacion'),
				'SEMESTRE'=> $this->input->post('semestre'),
				'CORREO'=> $this->input->post('correo'),
				'CELULAR'=> $this->input->post('celular')
		);
	
	
		$this->load->model('EstudianteSemillero_Model');
		$this->EstudianteSemillero_Model->insertar($estudiante);
			redirect('EstudianteSemillero_Controller');
	
	}
	
	
	/**!!!FALTA PARTE GRAFICA!!!
	 * funcion para insertar un estudiante de semillero con los datos que llegan desde EditarEstudianteSemillero_View.
	 * 
	 */
	
	function editar(){
		$this->load->helper('url');
	
		$id=$this->input->post('identificacion');
		$estudiante= array(
				'SEMESTRE_SEMILLERO'=> $this->input->post('semestre_semillero'),
				'FACULTAD'=> $this->input->post('facultad'),
				'PROGRAMA'=> $this->input->post('programa'),
				'NOMBRE'=> $this->input->post('nombre'),
				'SEMESTRE'=> $this->input->post('semestre'),
				'CORREO'=> $this->input->post('correo'),
				'CELULAR'=> $this->input->post('celular')
		);
	
		$this->load->model('EstudianteSemillero_Model');
		$this->EstudianteSemillero_Model->editar($id,$estudiante);
		redirect('EstudianteSemillero_Controller');
	
	
	}
	
}