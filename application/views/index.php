<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fabian David Osorio Sarmiento">

    <title>SIVI-UQ</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/js/clean-blog.min.js"></script>

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
                        <a href="<?php echo base_url(); ?>index.php/Administrador_Controller">Administrador</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Consejo_Curricular_Programa_Controller" value="Consejo Curricular" type="submit" name="Consejo_Curricular">Consejo curricular ingenieria</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Consejo_Investigaciones_Facultad_Controller" value="Consejo CUrricular" type="submit" name="Consejo_Investigaciones">Consejo de investigacion facultad</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Comite_Central_Investigaciones_Controller" value="Comite Central Investigaciones" type="submit" name="Comite_Central">Comite central</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Vicerrectoria_Investigaciones_Controller" value="Vicerrectoria Investigaciones" type="submit" name="Vicerrectoria_Investigaciones">Vicerrectoria de investigacion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?=base_url();?>assets/img/bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>SIVI-UQ</h1>
                        <hr class="small">
                        <span class="subheading">Nunca antes gestionar y administrar los proyectos de investigación había sido tan fácil</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            La Universidad del Quindío se renueva.
                        </h2>
                        <h3 class="post-subtitle">
                            La universidad del Quindío con colaboración de tres estudiantes de ingeniería ha puesto en marcha el desarrollo de un proyecto...
                        </h3>
                    </a>
                    <p class="post-meta">Posteado por <a href="#">Administrador</a> el 20 de mayo del 2015</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Ingeniería de Sistemas y Computación en proceso de re-acreditación académica
                        </h2>
                    </a>
                    <p class="post-meta">Posteado por <a href="#">Administrador</a> el 18 de mayo del 2015</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Tres estudiantes desarrollan SIVI-UQ
                        </h2>
                        <h3 class="post-subtitle">
                            Tres estudiantes del programa de ingeniería de sistemas y computación desarrollan una plataforma web para gestionar y administrar los proyectos de investigación de la universidad del Quindío
                        </h3>
                    </a>
                    <p class="post-meta">Posteado por <a href="#">Administrador</a> el 5 de marzo del 2015 </p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
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
                    <p class="copyright text-muted">Copyright &copy;</p>
                    <p class="copyright text-muted">Fabian David Osorio Sarmiento</p>
                     <p class="copyright text-muted">Juan Sebastián Florez Saavedra</p>
                    <p class="copyright text-muted">Jeison Julian Barbosa Serna</p>
                   
                </div>
            </div>
        </div>
    </footer>

    

</body>

</html>
