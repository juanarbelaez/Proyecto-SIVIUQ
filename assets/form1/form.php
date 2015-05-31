<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-light-green" style="background-color:#ffffff;font-size:16px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Proyecto de investigacion</h2></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Titulo del proyecto"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="nombre bombre"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Nombre de la facultad"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Nombre del programa"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" required="required" placeholder="Año de inicio del proyecto"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number" required="required" placeholder="Numero del proyecyo (codigo de autentificacion)" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input3" required="required" placeholder="Duracion del proyecto"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input4"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input4" required="required" placeholder="Grupo de investigacion al que se asocia el proyecto"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input5"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input5" required="required" placeholder="Linea de investigacion al que se asocia el proyecto"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="2000000" name="number1" required="required" placeholder="# Numero de identificacion del investigador principal" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input6"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input6" placeholder="Estado del proyecto"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="small" name="textarea" cols="20" rows="5" placeholder="Escriba aqui detalles del proyecto"></textarea><span class="icon-place"></span></div></div>
	<div class="element-file<?php frmd_add_class("file"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="large" ><div class="button">Seleccionar archivo</div><input type="file" class="file_input" name="file" required="required"/><div class="file_text">Formato del proyecto</div><span class="icon-place"></span></label></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>