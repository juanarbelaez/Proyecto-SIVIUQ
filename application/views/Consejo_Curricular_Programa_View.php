<h2>Proyectos </h2>

<?php 

if($lista!= false){
	
	$this->table->set_heading('ID', 'Facultad', 'Programa', 'Formato', 'Estado', 'Decisión');
	for ($i=0; $i<count($lista);$i++){
		foreach ($lista[$i] as $row){
			$this->table->add_row($row->NUMERO, $row->FACULTAD, $row->PROGRAMA, $row->FORMATO_PROYECTO, '----');
		
				
	}
	}
	echo $this->table->generate();
	
}
?>