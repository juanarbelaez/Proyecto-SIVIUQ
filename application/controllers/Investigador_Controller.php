<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Investigador_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('Investigador_view');
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
	
}