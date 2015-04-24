<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Investigador</title>
</head>
<body>

<h1>Eliminar Investigador</h1>
<br>
<br>
<br>
<form  action="<?php echo base_url(); ?>index.php/Investigador_Controller/eliminar" method="post" name="form">
<label>Documento: <input type="text" name="documento"></label>
<br>
<input type="submit" name="Editar" value="Editar">

</form>

</body>
</html>