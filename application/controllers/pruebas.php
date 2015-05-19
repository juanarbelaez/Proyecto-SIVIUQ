<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class pruebas extends CI_Controller{

		public function index(){
			$this->load->library('unit_test');
				
			
			$this->unit->use_strict(TRUE);
			$this->unit->run($this->esArreglo_insertar(), 'is_array', "Prueba de tipo listar", 'MODULO ESTUDIANTE SEMILLERO: Prueba de el metodo insertar');
			$this->unit->run($this->insertar_estudiante_semillero(), '1094900638', "Prueba de validar estudiante insertado", "MODULO ESTUDIANTE SEMILLERO: Valida que el estudiante que se inserte sea igual al de la prueba");
			$this->unit->run($this->actualizar_semillero(),'is_true', 'Actualizar estudiante semillero', 'MODULO ESTUDIANTE SEMILLERO: prueba para verificar que al actualizar  el estudiante inscrito en el semillero cambie correctamente');
			$this->unit->run($this->probarEliminar(), 'is_true', 'Eliminar estudiante semillero', 'MODULO ESTUDIANTE SEMILLERO: Prueba que verifica que se ha eliminado correctamente el estudiante de la base de datos');
			$this->unit->run($this->probarEliminar(), 'is_true', 'Obtener Estudiante Semillero', 'MODULO ESTUDIANTE SEMILLERO: Prueba que verifica el metodo obtener');
			$this->unit->run($this->aprobarComite(), 'is_true', 'Aprobacion de comite central de investigaciones', 'MODULO COMITE CENTRAL INVESTIGACIONES: Verificar que exista la aprobación y que tenga su estado correctamente');
			$this->unit->run($this->aprobarComiteCurricular(), 'is_true', 'Aprobacion de consejo curricular programa', 'MODULO CONSEJO CURRICULAR DEL PROGRAMA: Verificar que exista la aprobación y que tenga su estado correctamente');
			$this->unit->run($this->aprobarConsejoInvestigaciones(), 'is_true', 'Aprobacion de consejo de facultad', 'MODULO CONSEJO INVESTIGACIONES FACULTAD: Verificar que exista la aprobación y que tenga su estado correctamente');
			$this->unit->run($this->aprobarVicerrectoriaInvestigaciones(), 'is_true', 'Aprobacion de Vicerrectoria de Investigaciones', 'MODULO VICERRECTORIA INVESTIGACIONES FACULTAD: Verificar que exista la aprobación y que tenga su estado correctamente');
			$this->unit->run($this->esArregloConvocatoria(), 'is_array', "Prueba de tipo listar", 'MODULO CONVOCATORIA: Prueba de el metodo listar');
			$this->unit->run($this->insertar_investigador(), '12345678', "Prueba de validar el investigador insertado", "MODULO INVESTIGADOR: Valida que el investigador que se inserte sea igual al de la prueba");
			$this->unit->run($this->esArreglo_investigador(), 'is_array', "Prueba de tipo listar", 'MODULO INVESTIGADOR: Prueba de el metodo insertar al listar el investigasdor');
			$this->unit->run($this->actualizar_investigador(),'is_true', 'Actualizar Investigador', 'MODULO INVESTIGADOR: prueba para verificar que al actualizar  el investigador inscrito cambie correctamente');

			$this->load->view('tests');
		}

		/**
		 * Método que me permite validar al insertar los campos la identificacion es la correcta
		 */ 
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



		/**
		 * Método que me permite validar que el dato sea un arrreglo
		 */ 
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
		
		/**
		 * Método que me permite validar que la actualización se este efectuando correctamente
		 */ 
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

		/**
		 * Método que me permite validar su el estudiante fue eliminado correctamente
		 */ 
		function probarEliminar(){
			$this->load->helper('url');
			$this->load->model('EstudianteSemillero_Model');
			$estudiante= array(
				'SEMESTRE_SEMILLERO'=> "semestre 2016-2",
				'FACULTAD'=>"Educacion",
				'PROGRAMA'=> "Lenguas Modernas",
				'NOMBRE'=> "Andres David Montoya",
				'IDENTIFICACION'=> "1098432234",
				'SEMESTRE'=> "5",
				'CORREO'=> "admon@live.com",
				'CELULAR'=> "311885115"
			);
			// Inserto un estudiante en la base de datos
			$this->EstudianteSemillero_Model->insertar($estudiante);

			$this->EstudianteSemillero_Model->eliminar($estudiante['IDENTIFICACION']);
			// Consulto el estudiante en la base de datos, no debería existir porque en la línea anterior se eliminó
			$resultado = $this->EstudianteSemillero_Model->obtener($estudiante['IDENTIFICACION']);
			// Verifico si el arreglo resultado está vacío, si está vacío es porque eliminó correctamente
			if(empty($resultado))
				return true;
			else 
				return false;

		}
		/**
		 * Método que me permite validar si el estudiante existe en la BD
		 */ 
		function probarSelect (){
			$this->load->helper('url');
			$this->load->model('EstudianteSemillero_Model');
			$estudiante= array(
				'SEMESTRE_SEMILLERO'=> "semestre 2017-1",
				'FACULTAD'=>"Ciencias Basicas",
				'PROGRAMA'=> "Tec Electronica",
				'NOMBRE'=> "Fabian Osorio",
				'IDENTIFICACION'=> "1098643",
				'SEMESTRE'=> "7",
				'CORREO'=> "Fabi@live.com",
				'CELULAR'=> "311567887"
				);

			// Inserto un estudiante en la base de datos
			$this->EstudianteSemillero_Model->insertar($estudiante);
			$resultado =  $this->EstudianteSemillero_Model->obtener($estudiante['IDENTIFICACION']);
			$this->EstudianteSemillero_Model->eliminar($estudiante['IDENTIFICACION']);

			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}

			if($resultado->IDENTIFICACION == $estudiante['IDENTIFICACION'])
				return true;
			else 
				return false;

		}

		//////////////////////////////////////////////Modulo Comité central Investigaciones//////////////////////////
		/**
		 * Método que me permite validar si la aprobación o no de los diferentes entes
		 */ 
		function aprobarComite()
		{
			$this->load->helper('url');
			$this->load->model('Comite_Central_Investigaciones_Model');
			$resultado =  $this->Comite_Central_Investigaciones_Model->evaluar('Aprobado', 7777);

			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}

			if($resultado[1]== 7777)
				return true;
			else
				return false;
		}

		/////////////////////////////////////////////Modulo Consejo Curricular Programa///////////////////
		/**
		 * Método que me permite validar si la aprobación o no de los diferentes entes
		 */ 
		function aprobarComiteCurricular()
		{
			$this->load->helper('url');
			$this->load->model('Consejo_Curricular_Programa_Model');
			$resultado =  $this->Consejo_Curricular_Programa_Model->evaluar('Aprobado', 7777);

			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}

			if($resultado[1]== 7777)
				return true;
			else
				return false;
		}

		////////////////////////////////////////Modulo consejo Investigaciones /////////////////////////////////
		/**
		 * Método que me permite validar si la aprobación o no de los diferentes entes
		 */ 

		function aprobarConsejoInvestigaciones()
		{
			$this->load->helper('url');
			$this->load->model('Consejo_Investigaciones_Facultad_model');
			$resultado =  $this->Consejo_Investigaciones_Facultad_model->evaluar('Aprobado', 7777);

			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}

			if($resultado[1]== 7777)
				return true;
			else
				return false;
		}


		////////////////////////////////////////////////Vicerrectoría de Investigaciones////////////////////////
		/**
		 * Método que me permite validar si la aprobación o no de los diferentes entes
		 */ 

		function aprobarVicerrectoriaInvestigaciones()
		{
			$this->load->helper('url');
			$this->load->model('Vicerrectoria_Investigaciones_Model');
			$resultado =  $this->Vicerrectoria_Investigaciones_Model->evaluar('Aprobado', 7777);

			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}

			if($resultado[1]== 7777)
				return true;
			else
				return false;
		}

////////////////////////////////////////////////////MODULO Convocatorias/////////////////////////////////////////////////////

		/**
		 * Método que me permite validar que el dato sea un arrreglo
		 */ 
		function esArregloConvocatoria(){
		$this->load->helper('url');
		$convocatoria= array(
				'CONVOCATORIA'=> 1,
			);
	
	
			$this->load->model('Convocatoria_model');
		
			$resultado =  $this->Convocatoria_model->listarConvocatorias($convocatoria['CONVOCATORIA']);
			// Efectuar acciones para elimiar el estudiante creado, llamando algun metodo que elimine el estudiante en el modelo
					return $resultado;
		}
////////////////////////////////////////////////////Modulo Investigador///////////////////////////////////////////		
/**
		 * Método que me permite validar al insertar los campos la identificacion es la correcta
		 */ 
		function insertar_investigador(){
			$this->load->helper('url');
			$investigador= array(
				'PROGRAMA'=> "Sistemas",
				'FACULTAD'=> "Ingenieria",
				'GRUPO_INVESTIGACION'=> "SINFOCI",
				'TIPO_VINCULACION'=> "Planta",
				'NOMBRE'=> "Faber Giraldo",
				'DOCUMENTO'=> "12345678",
				'CELULAR'=> "1234568",
				'CORREO'=> "Faber@live.com"
		);
	
	
			$this->load->model('Investigador_Model');
		
			$this->Investigador_Model->insertar($investigador);
			$resultado =  $this->Investigador_Model->obtener($investigador['DOCUMENTO']);
			// Efectuar acciones para elimiar el investigador creado, llamando algun metodo que elimine el investigador en el modelo
			$this->Investigador_Model->eliminar($investigador['DOCUMENTO']);

			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}
			
			return $resultado->DOCUMENTO;
		}

		/**
		 * Método que me permite validar que el dato sea un arrreglo
		 */ 
		function esArreglo_investigador(){
		$this->load->helper('url');
			$investigador= array(
				'PROGRAMA'=> "Sistemas",
				'FACULTAD'=> "Ingenieria",
				'GRUPO_INVESTIGACION'=> "SINFOCI",
				'TIPO_VINCULACION'=> "Planta",
				'NOMBRE'=> "Faber Giraldo",
				'DOCUMENTO'=> "12345678",
				'CELULAR'=> "1234568",
				'CORREO'=> "Faber@live.com"
		);
	
	
		$this->load->model('Investigador_Model');
		
			$this->Investigador_Model->insertar($investigador);
			$resultado =  $this->Investigador_Model->obtener($investigador['DOCUMENTO']);
			// Efectuar acciones para elimiar el investigador creado, llamando algun metodo que elimine el investigador en el modelo
			$this->Investigador_Model->eliminar($investigador['DOCUMENTO']);

			return $resultado;
		}

		/**
		 * Método que me permite validar que la actualización se este efectuando correctamente
		 */ 
		function actualizar_investigador(){
			$this->load->helper('url');
			// obtengo el estado inicial del investigador Semillero.
			$estadoInicial =  $this->Investigador_Model->obtener(123);
			if(sizeof($estadoInicial) == 1){
				$estadoInicial = $estadoInicial[0];
			}
			// datos del investigador a editar
		$investigador= array(
				'PROGRAMA'=> "Sistemas",
				'FACULTAD'=> "Ingenieria",
				'GRUPO_INVESTIGACION'=> "GRID",
				'TIPO_VINCULACION'=> "Catedratico",
				'NOMBRE'=> "Ivan trivino",
				'CELULAR'=> "3117630511",
				'CORREO'=> "trivi@live.com"
		);
			$this->load->model('Investigador_Model');
			// etido el investigador
			$this->Investigador_Model->editar(123, $investigador);
			// consulto en la base de datos al investigador para luego comparar los valores y saber que se ha editado con èxito
			$resultado =  $this->Investigador_Model->obtener(123);
			if(sizeof($resultado) == 1){
				$resultado = $resultado[0];
			}
			// edito la base de datos para que quede en su estado inicial
			$this->Investigador_Model->editar(123, $estadoInicial);
			
			if($resultado->GRUPO_INVESTIGACION != $investigador['GRUPO_INVESTIGACION'])
				return false;
			if($resultado->FACULTAD != $investigador['FACULTAD'])
				return false;
			if($resultado->PROGRAMA != $investigador['PROGRAMA'])
				return false;
			if($resultado->NOMBRE != $investigador['NOMBRE'])
				return false;
			return true;	
		}

	}


?>