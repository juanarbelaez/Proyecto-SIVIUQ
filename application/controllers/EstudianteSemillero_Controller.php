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
		if($this->EstudianteSemillero_Model->insertar($estudiante))
			redirect('EstudianteSemillero_Controller');
	
	}
}