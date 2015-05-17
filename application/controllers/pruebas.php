<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class pruebas extends CI_Controller{

		public function index(){
			$this->load->library('unit_test');
				
			
			$this->unit->use_strict(TRUE);
			$this->unit->run($this->esArreglo_insertar(), 'is_array', "Prueba de tipo listar", 'PRUEBA PARA EL METODO INSERTAR ESTUDIANTE SEMILLERO');
			$this->unit->run($this->insertar_estudiante_semillero(), '1094900638', "Prueba de validar estudiante insertado", "Valida que el estudiante que se inserte sea igual al de la prueba");
			$this->unit->run($this->actualizar_semillero(),'is_true','Actualizar estudiante semillero', 'prueba para actualizar el estudiante inscrito en el semillero');
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
			$this->EstudianteSemillero_Model->eliminar($estudiante['IDENTIFICACION']);
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




		function esArreglo_insertar(){
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
			$this->EstudianteSemillero_Model->eliminar($estudiante['IDENTIFICACION']);

			return $resultado;
		}





//porque retorna null ?
		function actualizar_semillero(){
			$this->load->helper('url');
			// obtengo el estado inicial del estudiante Semillero.
			$estadoInicial =  $this->EstudianteSemillero_Model->obtener(15464);
			if(sizeof($estadoInicial) == 1){
				$estadoInicial = $estadoInicial[0];
			}
			// datos del estudiante a editar
			$estudiante= array(
				'SEMESTRE_SEMILLERO'=> "semestre 2015-2",
				'FACULTAD'=>"Ingeniería",
				'PROGRAMA'=> "sistemas",
				'NOMBRE'=> "SEBASTIAN FLOREZ",
				'SEMESTRE'=> "10",
				'CORREO'=> "jeisiton@live.com",
				'CELULAR'=> "311885115"
			);
			$this->load->model('EstudianteSemillero_Model');
			// etido el estudiante
			$this->EstudianteSemillero_Model->editar(15464, $estudiante);
			// consulto en la base de datos al estudiante para luego comparar los valores y saber que se ha editado con èxito
			$resultado =  $this->EstudianteSemillero_Model->obtener(15464);
			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}
			// edito la base de datos para que quede en su estado inicial
			$this->EstudianteSemillero_Model->editar(15464, $estadoInicial);
			
			if($resultado->SEMESTRE_SEMILLERO != $estudiante['SEMESTRE_SEMILLERO'])
				return false;
			if($resultado->FACULTAD != $estudiante['FACULTAD'])
				return false;
			if($resultado->PROGRAMA != $estudiante['PROGRAMA'])
				return false;
			if($resultado->NOMBRE != $estudiante['NOMBRE'])
				return false;
			return true;	
		}


		function probarEliminar(){
			$this->load->helper('url');
			$estadoInicial =  $this->EstudianteSemillero_Model->obtener(15464);
			if(sizeof($estadoInicial) == 1){
				$estadoInicial = $estadoInicial[0];
			}

		}

	}

?>