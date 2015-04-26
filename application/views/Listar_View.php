<form  action="<?php echo base_url(); ?>index.php/Listar_Controller/Listar" method="post" name="form">
<label> Buscar por: 
	<select name="tipo">
				<option value= convocatoria> Convocatoria</option>
				<option value= grupo_investigacion> Grupo Investigación</option>
				<option value= investigador> Investigador</option>
		</select>
		<input type="text"  name="buscar" >
		
<input type="submit" name="Buscar" value="Buscar">
</form>
		