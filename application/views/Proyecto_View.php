<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fabian David Osorio Sarmiento">

    <title>Proyecto de investigación</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url();?>assets/form1/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?=base_url();?>assets/form1/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/form1/formoid-solid-light-green.js"></script>
	<!-- jQuery -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Administrador_Controller">Atras</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?=base_url();?>assets/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Registra un proyecto de investigación</h1>
                        <hr class="small">
                        <span class="subheading">Aqui puedes registrar un proyecto de investigación con el formulario que encontrarás más abajo.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <body class="blurBg-false" style="background-color:#ffffff">

<form enctype="multipart/form-data" class="formoid-solid-light-green" style="background-color:#ffffff;font-size:16px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="<?php echo base_url(); ?>index.php/Proyecto_Controller/insertar">
	<div class="title">
		<h2>Proyecto de investigación</h2>
	</div>
	<div class="element-select">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<div class="large">
				<span>
					<select name="convocatoria" required="required">

						<?php 
							foreach ($listaConvocatoria as $row) {
							echo "<option value= $row->NUMERO> $row->DESCRIPCION</option>";
							}
						?>
					</select>
					<i></i>
					<span class="icon-place"></span>
				</span>
			</div>
		</div>
	</div>
	<div class="element-input" title="">
		<label class="title">
			<span class="required">* Facultad</span>
		</label>
		<div class="item-cont">
			<select class="large" type="text" name="facultad" >
				<option value= Ingeniería> Ingeniería</option>
				<option value= Educación> Educación</option>
				<option value="Ciencias de la Salud" > Ciencias de la Salud</option>
	</select>
	<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-input">
		<label class="title">
			<span class="required">* Programa</span>
		</label>
		<div class="item-cont">
		<select class="large" type="text" name="programa" required="required" placeholder="Programa al que pertenece el investigador">
				<option value= "Sistemas y Computación"> Sistemas y Computación</option>
				<option value= Civil> Civil</option>
				<option value= Electrónica> Electrónica</option>
	</select>	
		<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-date">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" data-format="yyyy-mm-dd" type="date" name="anio_inicio" required="required" placeholder="Año de inicio del proyecto"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-input">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large" type="text" name="titulo" placeholder="Titulo del proyecto"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-number">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" min="0" max="100" name="numero" required="required" placeholder="Numero del proyecto (codigo de autentificación)" value=""/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-input">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" name="duracion" required="required" placeholder="Duracion del proyecto"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-input">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" name="grupo_investigacion" required="required" placeholder="Grupo de investigación al que se asocia el proyecto"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-input">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" name="linea_investigacion" required="required" placeholder="Linea de investigación al que se asocia el proyecto"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-number">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" min="0" max="2000000" name="investigador_principal" required="required" placeholder="# Numero de identificación del investigador principal" value=""/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-input">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large" type="text" name="estado" placeholder="Estado del proyecto"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-textarea">
		<label class="title"></label>
		<div class="item-cont">
			<textarea class="small" name="detalles" cols="20" rows="5" placeholder="Escriba aqui detalles del proyecto"></textarea>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-file">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<label class="large" >
				<div class="button">Seleccionar archivo</div>
				<input type="file" class="file_input" name="formato_proyecto" required="required"/>
				<div class="file_text">Formato del proyecto</div>
				<span class="icon-place"></span>
			</label>
		</div>
	</div>
<div class="submit">
	<input id="boton" class="boton" type="submit" name="Guardar" value="Guardar"/>
</div>
</form>
</body>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Proyecto SIVI-UQ 2015</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>



