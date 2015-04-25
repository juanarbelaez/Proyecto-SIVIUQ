<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administradorr_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('Administrador_view');
	}
	

	/**
	 * Metodo para descargar formato
	 */
	function descargarFormato(){
	
	
		$query = $this->db->get('formatos');
	
		foreach ($query->result() as $row)
		{
			$n_formato=$row->NAME_FORMATO;
			$formato=$row->FORMATO_PROYECTO;
				
		}
		$data = file_get_contents("application/documentos/formatos/present_proyec.doc"); // Read the file's contents
		$name =  $n_formato;
	
	
		force_download($name, $data);
	}
	
	/**
	 * Metodo para descargar cuadro presupuesto.
	 */
	
	function descargarCuadro(){
	
	
		$query = $this->db->get('formatos');
	
		foreach ($query->result() as $row)
		{
				
			$n_cuadroPresu=$row->NAME_CUADRO;
			$cuadroPresu=$row->CUADRO_PRESUPUESTO;
	
		}
		$data = file_get_contents($cuadroPresu); // Read the file's contents
		$name =  $n_cuadroPresu;
		force_download($name, $data);
	}
	
	
	/**
	 * Metodo para descargar convocatoria
	 */
	function descargarConvocatoria(){
	
	
		$query = $this->db->get('convocatoria');
	
		foreach ($query->result() as $row)
		{
	
			$convocatoria=$row->DOCUMENTO;
	
		}
		$data = file_get_contents($convocatoria); // Read the file's contents
		$name =  "convocatoria.pdf";
		force_download($name, $data);
	}
	
	
}