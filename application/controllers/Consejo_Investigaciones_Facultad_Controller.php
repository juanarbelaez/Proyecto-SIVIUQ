<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Consejo_Investigaciones_Facultad_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Consejo_Investigaciones_Facultad_Model');
	}

	function index(){
		$facultad= "Ingenieria";
		$data['lista']= $this->Consejo_Investigaciones_Facultad_Model->consultar($facultad);
		$this->load->view('header', array('titulo' => "Consejo Investigaciones Facultad"));
		$this->load->view('Consejo_Investigaciones_Facultad_View', $data);
		$this->load->view('footer');
	}

	
	function evaluar(){
		$this->load->helper('url');
		$facultad= "Ingenieria";
		$id=$_GET['id'];
		$decision=$_GET['decision'];
		$this->Consejo_Investigaciones_Facultad_Model->evaluar($decision,$id);
// 		$data['lista']= $this->Consejo_Curricular_Programa_Model->consultar($facultad);
		redirect('Consejo_Investigaciones_Facultad_Controller');


	}
}