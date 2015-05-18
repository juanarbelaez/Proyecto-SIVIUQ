<h2>Comite Central de Investigaciones </h2>

<?php 

if($lista!= false){
	$this->table->set_heading('ID', 'Facultad', 'Programa', 'Formato', 'Estado', 'Decisión');
// 	for ($i=0; $i<count($lista);$i++){
		foreach ($lista as $row){
			$this->table->add_row($row->NUMERO, $row->FACULTAD, $row->PROGRAMA, $row->FORMATO_PROYECTO, $row->ESTADO, '<a href="Comite_Central_Investigaciones_Controller/evaluar?id='.$row->NUMERO.' &decision=Aprobado"> <img src="http://cdn.directv.com/cms3/global/images/img__checklarge.png" align="left"> </a> <a href="Comite_Central_Investigaciones_Controller/evaluar?id='.$row->NUMERO.' &decision=No Aprobado"> <img src="http://www.aragon.es/aragon/img/icoCerrado.png" align="center"> </a>');
		
				
// 	}
	}
	echo $this->table->generate();
	
}
?>