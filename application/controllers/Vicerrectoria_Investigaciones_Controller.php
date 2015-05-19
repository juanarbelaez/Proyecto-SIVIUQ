<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vicerrectoria_Investigaciones_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Vicerrectoria_Investigaciones_Model');
	}

	function index(){
		$data['lista']= $this->Vicerrectoria_Investigaciones_Model->consultar();
		$this->load->view('header', array('titulo' => "Vicerrectoria de Investigaciones"));
		$this->load->view('Vicerrectoria_Investigaciones_View', $data);
		$this->load->view('footer');
	}


	function evaluar(){
		$this->load->helper('url');
		$id=$_GET['id'];
		$decision=$_GET['decision'];
		$this->Vicerrectoria_Investigaciones_Model->evaluar($decision,$id);
		redirect('Vicerrectoria_Investigaciones_Controller');
		

	}
function descargar_Archivo(){
	
		$formato=$_GET['formato'];
		$data = file_get_contents($formato.".doc"); // Read the file's contents
		$name =  "formato_proyecto.doc";
		force_download($name, $data);
	}
}