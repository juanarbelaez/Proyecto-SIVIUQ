
	<table>
		<tr>
			<td> <h3>Programa</h3> </td>
			<td><h3>Facultad</h3></td>
			<td><h3>Grupo </h3></td>
			<td><h3>Tipo Vinculacion</h3> </td>
			<td><h3>Nombre</h3></td>
			<td><h3>Documento</h3></td>
			<td><h3>Celular</h3></td>
			<td><h3>Correo </h3></td>
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

