<h2>Vicerrectoria de Investigaciones </h2>

<?php 

if($lista!= false){
	$this->table->set_heading('ID', 'Facultad', 'Programa', 'Formato', 'Estado', 'Decisión');
// 	for ($i=0; $i<count($lista);$i++){
		foreach ($lista as $row){
			$this->table->add_row($row->NUMERO, $row->FACULTAD, $row->PROGRAMA, '<a href="Vicerrectoria_Investigaciones_Controller/descargar_Archivo?formato='.$row->FORMATO_PROYECTO.'"> <img src="http://ria.es/imagenes/iconos/descargar.gif" align="center"> </a>', $row->ESTADO, '<a href="Vicerrectoria_Investigaciones_Controller/evaluar?id='.$row->NUMERO.' &decision=Aprobado"> <img src="http://cdn.directv.com/cms3/global/images/img__checklarge.png" align="left"> </a> <a href="Vicerrectoria_Investigaciones_Controller/evaluar?id='.$row->NUMERO.' &decision=No Aprobado"> <img src="http://www.aragon.es/aragon/img/icoCerrado.png" align="center"> </a>');
		
				
// 	}
	}
	echo $this->table->generate();
	
}
?>