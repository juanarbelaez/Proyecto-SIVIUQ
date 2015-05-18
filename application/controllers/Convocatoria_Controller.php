<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('Proyecto_view');
	}
	
	
	function listarConvocatorias(){
		$this->load->model('Convocatoria_Model');
		
		$this->Convocatoria_Model->listarConvocatorias();
	}

	function obtener(){
		$this->load->helper('url');
		$this->load->model('Convocatoria_Model');
		$this->Convocatoria_Model->obtener($id);
	}
}