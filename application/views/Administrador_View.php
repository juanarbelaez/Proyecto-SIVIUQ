<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fabian David Osorio Sarmiento">

    <title>Administrador</title>

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
                <!--<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/inicio_controller">Inicio</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Proyecto_Controller" value="Registrar Proyecto" type="submit" name="Registrar_Proyecto">Regis.Proyecto</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Investigador_Controller" value="Registrar Investigador" type="submit" name="Registrar_Investigador">Regis.Investigador</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Listar_Controller" value="Listar" type="submit" name="Listar">Lista de proyectos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Administrador_Controller/descargarConvocatoria" value="Descargar Convocatoria" type="submit" name="Descargar_Convocatoria">Descargar convocatoria</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Administrador_Controller/descargarFormato" value="Descargar Formato" type="submit" name="Descargar_Formato">Descargar formato</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Administrador_Controller/descargarCuadro" value="Descargar Cuadro Presupuesto" type="submit" name="Descargar_Cuadro">Descargar presupuesto</a>
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
                        <h1>Administrador</h1>
                        <hr class="small">
                        <span class="subheading">Aqui puedes gestionar todos los proyectos de investigación que necesites.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Con tan solo un clic puedes seleccionar en la barra del menú (ubicada arriba de tu pantalla) diferentes funciones como:
                	<p>- Registrar un proyecto.
                	<p>- Registrar un investigador.
                	<p>- Ver una lista de todos los proyectos de investigación que hay.
                	<p>- Descargar todos los formatos que se requieren este semestre para presentar un proyecto de investigación.</p>
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
                    <p class="copyright text-muted">Copyright &copy; Proyeto SIVI-UQ 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/js/clean-blog.min.js"></script>

</body>

</html>
