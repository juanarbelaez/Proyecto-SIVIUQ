<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Proyecto Investigaci�n</title>
</head>
<body>

<h1>Proyecto de Investigaci�n</h1>
<br>
<br>
<h2>Registrar Proyecto</h2>
<br>
<form  action="<?php echo base_url(); ?>index.php/Proyecto_Controller/insertar" method="post" name="form">

<label>Titulo: <input type="text" name="titulo"></label>
<br>
<br>
<label>Identificaci�n: <input type="text" name="identificacion"></label>
<br>
<br>
<label>Duraci�n <input type="text" name="duracion"></label>
<br>
<br>
<label>Grupo de Investigaci�n: <input type="text" name="grupo_investigacion"></label>
<br>
<br>
<label>Linea de Investigaci�n: <input type="text" name="linea_investigacion"></label>
<br>
<br>
<label>Investigador Principal: <input type="text" name="investigador_principal"></label>
<br>
<br>
<label>Estado: <input type="text" name="estado"></label>
<br>
<br>
<label>Detalles: <input type="text" name="detalles"></label>
<br>
<br>

<input type="submit" name="Guardar" value="Guardar">

</form>

</body>
</html>