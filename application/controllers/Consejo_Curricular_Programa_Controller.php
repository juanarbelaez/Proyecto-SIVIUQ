<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Consejo_Curricular_Programa_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Consejo_Curricular_Programa_Model');
	}

	function index(){
		$data['lista']= $this->Consejo_Curricular_Programa_Model->consulta();
		$this->load->view('header', array('titulo' => "Consejo Curricular Programa"));
		$this->load->view('Consejo_Curricular_Programa_View', $data);
		$this->load->view('footer');
	}

	function evaluar($id){
		$this->load->helper('url');
		
		
	}
}