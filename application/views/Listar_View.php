<h2>Busqueda de proyectos</h2>

<form id="formulario" class="formulario" action="<?php echo base_url(); ?>index.php/Listar_Controller/Listar" method="post" name="form">
<label> Buscar por: </label>
	<select name="tipo">
				<option value= convocatoria> Convocatoria</option>
				<option value= grupo_investigacion> Grupo Investigación</option>
				<option value= investigador> Investigador</option>
	</select>

		<input type="text"  name="buscar" >
		
	<input id="boton" class="boton" type="submit" name="Buscar" value="Buscar">
</form>
		