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
			<td>Facultad </td>
			<td>Programa</td>
			<td>A�o Inicio</td>
			<td>Titulo</td>
			<td>Numero</td>
			<td>Duraci�n</td>
			<td>Grupo Investigaci�n</td>
			<td>Linea Investigaci�n</td>
			<td>Identificaci�n Investigador</td>
			<td>Estado</td>
			<td>Detalles</td>
			
			</tr>
			
			<?php 
			if($listaProyectos!=false){
				for($i=0; $i<count($listaProyectos); $i++){
				
				foreach ($listaProyectos[$i] as $row){
				echo "<tr>";
			echo "<td>". $row->FACULTAD . "</td>";
			echo "<td>".$row->PROGRAMA. "</td>";
			echo "<td>".$row->ANIO_INICIO. "</td>";
			ECHO "<td>". $row->TITULO. "</td>";
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
			else{
				echo "no hay PROYECTOS";
			
			}
			?>
	
	
	</table>


</body>
</html>