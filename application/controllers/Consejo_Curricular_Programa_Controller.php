<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Consejo_Curricular_Programa_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Consejo_Curricular_Programa_Model');
	}

	function index(){
		$programa="Sistemas y Computacion";
		$data['lista']= $this->Consejo_Curricular_Programa_Model->consultar($programa);
		$this->load->view('header', array('titulo' => "Consejo Curricular Programa"));
		$this->load->view('Consejo_Curricular_Programa_View', $data);
		$this->load->view('footer');
	}
	

	function evaluar(){
		$this->load->helper('url');
		$programa="Sistemas y Computacion";
		$id=$_GET['id'];
		$decision=$_GET['decision'];
		$this->Consejo_Curricular_Programa_Model->evaluar($decision,$id);
// 		$data['lista']= $this->Consejo_Curricular_Programa_Model->consultar($programa);
		redirect('Consejo_Curricular_Programa_Controller');
		
		
	}
	
	function descargar_Archivo(){
	
		$formato=$_GET['formato'];
		$data = file_get_contents($formato.".pdf"); // Read the file's contents
		$name =  "formato_proyecto.pdf";
		force_download($name, $data);
	}
	
}