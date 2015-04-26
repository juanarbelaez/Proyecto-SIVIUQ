<h2>Registrar Proyecto</h2>

<br>
<form id="formulario" class="formulario" action="<?php echo base_url(); ?>index.php/Proyecto_Controller/insertar" method="post" name="form">


<label> Convocatoria: <?php  echo count($listaConvocatoria);?>
	<select name="convocatoria">
		<?php 
				foreach ($listaConvocatoria as $row){
				echo "<option value= $row->NUMERO> $row->DESCRIPCION</option>";
				}
			?>
		</select>
		<br>
		<br>

</label>
<label>Facultad: <input type="text" name="facultad"></label><br><br>
<label>Programa: <input type="text" name="programa"></label><br><br>
<label>año inicio: <input type="text" name="anio_inicio"></label><br><br>
<label>Titulo: <input type="text" name="titulo"></label><br><br>
<label>Numero: <input type="text" name="numero"></label><br><br>
<label>Duración <input type="text" name="duracion"></label><br><br>
<label>Grupo de Investigación: <input type="text" name="grupo_investigacion"></label><br><br>
<label>Linea de Investigación: <input type="text" name="linea_investigacion"></label><br><br>
<label>Investigador Principal: <input type="text" name="investigador_principal"></label><br><br>
<label>Estado: <input type="text" name="estado"></label><br><br>
<label>Detalles: <input type="text" name="detalles"></label><br><br>
<label>Formato Proyecto: <input id="formatos" class="formatos" type="file" name="formato_proyecto"></label><br><br>
<label>Cuadro Presupuesto: <input id="formatos" class="formatos" type="file" name="cuadro_presupuesto"></label><br><br>
<input id="boton" class="boton" type="submit" name="Guardar" value="Guardar">

</form>
