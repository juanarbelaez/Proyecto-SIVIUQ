<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proyecto_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		
		$this->load->view('header', array('titulo' => "Crear Proyecto"));
		$this->load->model('Convocatoria_Model');
		$data['listaConvocatoria']=$this->Convocatoria_Model->listarConvocatorias();
		$this->load->view('Proyecto_view', $data);
		$this->load->view('footer');
		
	}
	
	/**
	 * funcion para insertar un proyecto con los datos que llegan desde Proyecto_View.
	 */
	function insertar(){
	
		$this->load->helper('url');
		$idConvocatoria=  $this->input->post('convocatoria');
		$proyecto= array(
				'FACULTAD'=>$this->input->post('facultad'),
				'PROGRAMA'=> $this->input->post('programa'),
				'ANIO_INICIO'=> $this->input->post('anio_inicio'),
				'TITULO'=> $this->input->post('titulo'),
				'NUMERO'=> $this->input->post('numero'),
				'DURACION'=> $this->input->post('duracion'),
				'GRUPO_INVESTIGACION'=> $this->input->post('grupo_investigacion'),
				'LINEA_INVESTIGACION'=> $this->input->post('linea_investigacion'),
				'INVESTIGADOR_PRINCIPAL'=> $this->input->post('investigador_principal'),
				'ESTADO'=> $this->input->post('estado'),
				'DETALLES'=> $this->input->post('detalles')
		);
	
	
		$this->load->model('Proyecto_Model');
		$this->Proyecto_Model->insertar($proyecto, $idConvocatoria);
	
		
	
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