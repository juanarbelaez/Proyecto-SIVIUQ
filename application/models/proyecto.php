<?php

class proyecto {


	private $proyectoId;

	private $cedulaDocente;
	
	private $nombreDocente;

	private $ciudadProyecto;

	private  $codAprobacion;

	private  $codInscripcion;

	private $proConsecutivo;

	public function _construct(
	 $proyectoId, $cedulaDocente, $nombreDocente, 
	 $ciudadProyecto,  $codAprobacion,  
	 $proy_CodInscripcion, $proyConsutivo)
	 {
	 	$this-> proyectoId=$proyectoId;
	 	$this-> cedulaDocente=$cedulaDocente;
	 	$this-> nombreDocente=$nombreDocente;
	 	$this-> ciudadProyecto=$ciudadProyecto;
	 	$this-> cedulaDocente=$cedulaDocente;
	 	$this-> nombreDocente=$nombreDocente;
	 	$this-> ciudadProyecto=$ciudadProyecto;
		$this-> codAprobacion=$codAprobacion;
	 	$this-> codInscripcion=$codInscripcion;
	 	$this-> proConsecutivo=$proConsecutivo;
	 	

	 }
		


	}

}