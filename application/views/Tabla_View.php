<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla</title>
</head>
<body>

<h1>Tabla</h1>
<br>
	<table>
		<tr>
			<td>Programa </td>
			<td>Facultad</td>
			<td>Grupo </td>
			<td>Tipo Vinculacion </td>
			<td>Nombre</td>
			<td>Documento</td>
			<td>Celular</td>
			<td>Correo </td>
			</tr>
			
			<?php 
			if($data!=false){
				echo count($data);
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


</body>
</html>