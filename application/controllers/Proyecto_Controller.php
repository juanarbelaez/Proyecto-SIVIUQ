<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proyecto_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('Proyecto_view');
	}
	
	/**
	 * funcion para insertar un proyecto con los datos que llegan desde Proyecto_View.
	 */
	function insertar(){
	
		$this->load->helper('url');
		$proyecto= array(
				'TITULO'=> $this->input->post('titulo'),
				'IDENTIFICACION'=> $this->input->post('identificacion'),
				'DURACION'=> $this->input->post('duracion'),
				'GRUPO_INVESTIGACION'=> $this->input->post('grupo_investigacion'),
				'LINEA_INVESTIGACION'=> $this->input->post('linea_investigacion'),
				'INVESTIGADOR_PRINCIPAL'=> $this->input->post('investigador_principal'),
				'ESTADO'=> $this->input->post('estado'),
				'DETALLES'=> $this->input->post('detalles')
		);
	
	
		$this->load->model('Proyecto_Model');
		$this->Proyecto_Model->insertar($proyecto);
			redirect('Proyecto_Controller');
	
	}
	
	
	/**!!!FALTA PARTE GRAFICA!!!
	 * funcion para editar un proyecto con los datos que llegan desde EditarProyecto_View.
	 * 
	 */
	function editar(){
		$this->load->helper('url');
	
		$id=$this->input->post('identificacion');
		$proyecto= array(
				'TITULO'=> $this->input->post('titulo'),
				'DURACION'=> $this->input->post('duracion'),
				'GRUPO_INVESTIGACION'=> $this->input->post('grupo_investigacion'),
				'LINEA_INVESTIGACION'=> $this->input->post('linea_investigacion'),
				'INVESTIGADOR_PRINCIPAL'=> $this->input->post('investigador_principal'),
				'ESTADO'=> $this->input->post('estado'),
				'DETALLES'=> $this->input->post('detalles')
		);
	
		$this->load->model('Proyecto_Model');
		$this->Proyecto_Model->editar($id,$proyecto);
		redirect('Proyecto_Controller');
	
	
	}
	
}