<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proyecto_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$numero= 0;
	}
	
	function index(){
		
		$this->load->view('header', array('titulo' => "Crear Proyecto"));
		$this->load->model('Convocatoria_Model');
		$data['listaConvocatoria']=$this->Convocatoria_Model->listarConvocatorias();
		$this->load->view('Proyecto_view', $data);
		$this->load->view('footer');
		
	}
	
	function cargar_archivo() {
	
		$miArchivo='prueba';
		$config['upload_path'] = "uploads/";
		$config['file_name'] = "archivo ". $numero;
		$config['allowed_types'] = "doc|docx|pdf";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
	
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('formato_proyecto')) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			return;
		}
	
		$data['uploadSuccess'] = $this->upload->data();
	}
	
	
	/**
	 * funcion para insertar un proyecto con los datos que llegan desde Proyecto_View.
	 */
	function insertar(){
		$this->load->helper('url');
		$idConvocatoria=  $this->input->post('convocatoria');
		$investigador=$this->input->post('investigador_principal');
		$titulo=$this->input->post('titulo');
		//se sube el archivo a uploads
		$config['upload_path'] = "uploads/";
		$config['file_name'] =$investigador.'_'.$titulo ;
		$config['allowed_types'] = "doc|docx|pdf";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('formato_proyecto')) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			return;
		}
		
		$data['uploadSuccess'] = $this->upload->data();
		$proyecto= array(
				'FACULTAD'=>$this->input->post('facultad'),
				'PROGRAMA'=> $this->input->post('programa'),
				'ANIO_INICIO'=> $this->input->post('anio_inicio'),
				'TITULO'=> $titulo,
				'NUMERO'=> $this->input->post('numero'),
				'DURACION'=> $this->input->post('duracion'),
				'GRUPO_INVESTIGACION'=> $this->input->post('grupo_investigacion'),
				'LINEA_INVESTIGACION'=> $this->input->post('linea_investigacion'),
				'INVESTIGADOR_PRINCIPAL'=> $investigador,
				'ESTADO'=> $this->input->post('estado'),
				'DETALLES'=> $this->input->post('detalles'),
				'FORMATO_PROYECTO'=>"uploads/".$investigador.'_'.$titulo
		);
	
		
		$this->load->model('Proyecto_Model');
		$this->Proyecto_Model->insertar($proyecto, $idConvocatoria);
// 		$this->cargar_archivo();
	
		
	
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

	function obtener(){
		$this->load->helper('url');
		$this->load->model('Proyecto_Model');
		$this->Proyecto_Model->obtener($id);
	}
	

		/**
	 * Funcion para eliminar un investigador de la base de datos a traves del id.
	 */
	function eliminar(){
		$this->load->helper('url');
		$id=$this->input->post('NUMERO');
		
		$this->load->model('Proyecto_Model');
		$this->Proyecto_Model->eliminar($id);
		redirect('Proyecto_Controller');
	}
	
}