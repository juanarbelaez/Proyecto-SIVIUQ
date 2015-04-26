<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="././assets/template/style.css">
		<title><?php $titulo ?></title>
	</head>

	<body>
		<!--Donde _header es un parcial en el que se declarara lo que formara parte de la cabezera-->
		<?php
			echo $this->load->view('header');
		?>
		<div id = "content">
			<div id = "left">
				<!--Donde $content hace referencia al controlador que se va a llamar-->
				<?php
				echo $this->load->view($content);
				?>
			</div>

			<div id = "rigth">
				<!--Donde _menu es un parcial en el que se declarara lo que formara parte del menu-->
				<?php
					echo $this->load->view('_menu');
				?>
			</div>
		</div>
				<!--Donde _footer es un parcial en el que se declarara lo que formara parte del pie de pagina-->
				<?php
					echo $this->load->view('footer');
				?>
	</body>
</html>