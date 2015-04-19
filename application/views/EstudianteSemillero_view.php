<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Estudiante Semillero</title>
</head>
<body>

<h1>Estudiante</h1>
<br>
<br>
<h2>Ingresar Estudiante</h2>
<br>
<form  action="<?php echo base_url(); ?>index.php/EstudianteSemillero_Controller/insertar" method="post" name="form">

<label>Semestre del Semillero: <input type="text" name="semestre_semillero"></label>
<br>
<br>
<label>Facultad: <input type="text" name="facultad"></label>
<br>
<br>
<label>Programa: <input type="text" name="programa"></label>
<br>
<br>
<label>Nombre: <input type="text" name="nombre"></label>
<br>
<br>
<label>Identificación: <input type="text" name="identificacion"></label>
<br>
<br>
<label>Semestre: <input type="text" name="semestre"></label>
<br>
<br>
<label>Correo Electronico: <input type="text" name="correo"></label>
<br>
<br>
<label>Numero Celular: <input type="text" name="celular"></label>
<br>
<br>
<input type="submit" name="Guardar" value="Guardar">

</form>

</body>
</html>