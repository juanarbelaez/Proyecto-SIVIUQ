<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class pruebas extends CI_Controller{

		public function index(){
			$this->load->library('unit_test');
			

			$resultado = 2;
			$nombre = "Uno más uno";
			//$this->unit->run($this->insertar_estudiante_semillero(), 'is_array', "Preba de listar convocatorias");
			$this->unit->run($this->insertar_estudiante_semillero(), '1094900638', "Preba de listar convocatorias");
			$this->unit->run($this->prueba2(), 3, $nombre);
			$this->load->view('tests');
		}

		function insertar_estudiante_semillero(){
			$this->load->helper('url');
			$estudiante= array(
				'SEMESTRE_SEMILLERO'=> "semestre 2015-2",
				'FACULTAD'=>"Ingeniería",
				'PROGRAMA'=> "Ingeniería de sistemas y computación",
				'NOMBRE'=> "Jeison Julian Barbosa Serna",
				'IDENTIFICACION'=> "1094900638",
				'SEMESTRE'=> "10",
				'CORREO'=> "jeisiton@live.com",
				'CELULAR'=> "311885115"
			);
	
	
			$this->load->model('EstudianteSemillero_Model');
		
			$this->EstudianteSemillero_Model->insertar($estudiante);
			$resultado =  $this->EstudianteSemillero_Model->obtener($estudiante['IDENTIFICACION']);
			// Efectuar acciones para elimiar el estudiante creado, llamando algun metodo que elimine el estudiante en el modelo
			// $this->EstudianteSemillero_Model->eliminar($estudiante['IDENTIFICACION']);
			//return $resultado['IDENTIFICACION'];
			/*echo " Arreglo de arreglos --->";
			echo "<br>";
			echo "<br>";
			print_r($resultado);*/
			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}
			/*echo "<br>";
			echo "<br>";
			echo "Arreglo con los datos del estudiante";
			echo "<br>";
			echo "<br>";
			print_r($resultado);*/
			return $resultado->IDENTIFICACION;
		}

		function prueba2(){
			return $prueba = 1 + 2;
		}


	}

?>