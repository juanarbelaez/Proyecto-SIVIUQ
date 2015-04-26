<h2>Proyectos que hay registrados por un grupo de investigacion</h2>
	<table>
		<tr>
			<th><h3>Facultad</h3></th>
			<th><h3>Programa</h3></th>
			<th><h3>Año Inicio</h3></th>
			<th><h3>Titulo</h3></th>
			<th><h3>Numero</h3></th>
			<th><h3>Duración</h3></th>
			<th><h3>Grupo Investigación</h3></th>
			<th><h3>Linea Investigación</h3></th>
			<th><h3>Identificación Investigador</h3></th>
			<th><h3>Estado</h3></th>
			<th><h3>Detalles</h3></th>
		</tr>
			
			<?php 
			if($listaProyectos!=false){
				for($i=0; $i<count($listaProyectos); $i++){
				
				foreach ($listaProyectos[$i] as $row){
			echo "<tr>";
			echo "<td>". $row->FACULTAD . "</td>";
			echo "<td>".$row->PROGRAMA. "</td>";
			echo "<td>".$row->ANIO_INICIO. "</td>";
			echo "<td>". $row->TITULO. "</td>";
			echo "<td>".$row->NUMERO. "</td>";
			echo "<td>". $row->DURACION. "</td>";
			echo "<td>".$row->GRUPO_INVESTIGACION. "</td>";
			echo "<td>".$row->LINEA_INVESTIGACION. "</td>";
			echo "<td>".$row->INVESTIGADOR_PRINCIPAL. "</td>";
			echo "<td>". $row->ESTADO . "</td>";
			echo "<td>".$row->DETALLES. "</td>";
			echo "</tr>";
			}
				}
			}
			// else{
			//	echo "no hay PROYECTOS";
			
			//}//
			?> 
	
	
	</table>

