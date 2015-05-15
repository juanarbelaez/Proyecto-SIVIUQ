<h2>Proyectos que hay registrados por un grupo de investigacion</h2>
	
	
			<?php 
			if($listaProyectos!= false){
			
				$this->table->set_heading('Facultad', 'Programa', 'Año Inicio', 'Titulo', 'Numero', 'Duración', 
											'Grupo Investigación', 'Linea Investigación', 'ID. Investigador', 'Estado', 'Detalles');
				for ($i=0; $i<count($listaProyectos);$i++){
					foreach ($listaProyectos[$i] as $row){
						$this->table->add_row($row->FACULTAD, $row->PROGRAMA, $row->ANIO_INICIO,$row->TITULO, $row->NUMERO, $row->DURACION, $row->GRUPO_INVESTIGACION, 
												$row->LINEA_INVESTIGACION, $row->INVESTIGADOR_PRINCIPAL, $row->ESTADO, $row->DETALLES);
			
			
					}
				}
				echo $this->table->generate();
			
			}
			
			
			?> 
	
	
	

