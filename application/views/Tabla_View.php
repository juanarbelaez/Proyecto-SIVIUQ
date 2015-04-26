	<table>
		<tr>
			<th><h3>Programa</h3></th>
			<th><h3>Facultad</h3></th>
			<th><h3>Grupo </h3></th>
			<th><h3>Tipo Vinculacion</h3></th>
			<th><h3>Nombre</h3></th>
			<th><h3>Documento</h3></th>
			<th><h3>Celular</h3></th>
			<th><h3>Correo </h3></th>
		</tr>
			
			<?php 
			if($data!=false){
				for($i=0; $i<count($data); $i++){
				
				foreach ($data[$i] as $row){
					
					
			
			echo "<tr>";
			echo "<td>". $row->PROGRAMA . "</td>";
			echo "<td>".$row->FACULTAD. "</td>";
			echo "<td>".$row->GRUPO_INVESTIGACION. "</td>";
			echo "<td>".$row->TIPO_VINCULACION. "</td>";

			echo "<td>".$row->NOMBRE. "</td>";
			echo "<td>".$row->DOCUMENTO. "</td>";
			echo "<td>".$row->CELULAR. "</td>";
			echo "<td>".$row->CORREO. "</td>";
			echo "</tr>";
			}
				}
			}
			else{
				echo "no hay investigadores";
			
			}
			?>
	
	
	</table>

